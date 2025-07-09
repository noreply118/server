          var discharge_fee='{"AL":{"hsbc":"5","rbc":"5","bmo":"0"},\n\
                            "ON":{"hsbc":"250","rbc":"250","bmo":"200"},\n\
                            "BC":{"hsbc":"75","rbc":"75","bmo":"75"},\n\
                            "MA":{"hsbc":"250","rbc":"250","bmo":"100"},\n\
                            "NB":{"hsbc":"250","rbc":"250","bmo":"200"},\n\
                            "NE":{"hsbc":"50","rbc":"50","bmo":"200"},\n\
                            "NS":{"hsbc":"25","rbc":"25","bmo":"200"},\n\
                            "NT":{"hsbc":"250","rbc":"250","bmo":"200"},\n\
"NU":{"hsbc":"250","rbc":"250","bmo":"200"},\n\
                            "PE":{"hsbc":"25","rbc":"25","bmo":"200"},\n\
"QU":{"hsbc":"0","rbc":"0","bmo":"0"},\n\
                            "SK":{"hsbc":"250","rbc":"250","bmo":"200"},\n\
"YU":{"hsbc":"250","rbc":"250","bmo":"200"}}';
        
        function getPenalty()
        {
           var mortgage=parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));
           
           if(isNaN(mortgage))
           {
             mortgage = 0;
           }
           
           var mortgagerate=parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
           
           if(isNaN(mortgagerate))
           {
             mortgagerate = 0;
           }
           
           var penalty = '0';
           var discharge = '0';
           var total_penalty = '0';
           
           if(jQuery(".mort-type:checked").val() == 'variable')
           {
           penalty = (mortgage/100) * mortgagerate * (3/12);
           var fee = JSON.parse(discharge_fee);
           discharge = fee[jQuery("#province").find('option:selected').val()][jQuery("#provider").find('option:selected').val()];
           total_penalty = parseInt(penalty) + parseInt(discharge);
           jQuery("#discharge-fee").val(discharge);
           jQuery("#mortgage-penalty").val(Globalize.format(Math.abs(total_penalty)));
           }
           else
           {
               
           var start_date = new Date(jQuery("#year").find('option:selected').val(), jQuery("#month").find('option:selected').val(), jQuery("#date").find('option:selected').val());
           var end_date = new Date();
           var months = (end_date.getFullYear() - start_date.getFullYear())*12 + (end_date.getMonth() - start_date.getMonth());
           var total_months = parseInt(jQuery("#mort-term").find('option:selected').text()) * 12;
           var diff_months = parseInt(total_months) - parseInt(months);
           
           var newrate=parseInt(jQuery("#newloaninterest").val().replace(/[^\d\.]/g, ""));;
           
           if(isNaN(newrate))
           {
             newrate = 0;
           }
           
           var rate_diff = mortgagerate - newrate; 
           var month_interest = (mortgage * rate_diff/100) / 12;
           penalty = diff_months * month_interest;
           var fee = JSON.parse(discharge_fee);
           discharge = fee[jQuery("#province").find('option:selected').val()][jQuery("#provider").find('option:selected').val()];
           total_penalty = parseInt(penalty) + parseInt(discharge);
           jQuery("#discharge-fee").val(discharge);
           jQuery("#mortgage-penalty").val(Globalize.format(Math.abs(total_penalty)));  
           }
           
           
           if(total_penalty <= 0)
           {
             jQuery("#mortgage-penalty").css("color","red");  
           }
           else
           {
             jQuery("#mortgage-penalty").css("color","green");  
           }
        }
        
       


jQuery(document).ready(function() {

    jQuery("#loanamount").keyup(function() {
        jQuery("#loanamount").val(Globalize.format(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
    });
    
    jQuery("#loaninterest").keyup(function() {
        jQuery("#loaninterest").val(Globalize.format(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
    });
    
    jQuery("#newloaninterest").keyup(function() {
        jQuery("#newloaninterest").val(Globalize.format(jQuery("#newloaninterest").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
    });

    jQuery(".ref-penalty").click(function() {
        getPenalty();
    });

    H("Property Value", 3E6, 5E3, 50E4, 20, 20, 30, 0.5, 25, 2.99,1.99);
});

function H(a, e, z, b, k, I, A, M, K, R, S) {
    jQuery("#loanamount").unbind("change");
    jQuery("#loaninterest").unbind("change");
    jQuery("#newloaninterest").unbind("change");
    jQuery("#loaninterest").val(R);
    jQuery("#newloaninterest").val(S);
    jQuery("#loanamount").val(Globalize.format(b, "n", "en-IN"));
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g,
                "")),
        min: 0,
        max: e,
        step: z,
        slide: function(a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
            getPenalty();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    p.slider("value", p.slider("value"));
    q = jQuery("#loaninterestslider").slider({
        range: "min",
        value: parseFloat(jQuery("#loaninterest").val()),
        min: 0,
        max: 10,
        step: 0.25,
        slide: function(a, b) {
            jQuery("#loaninterest").val(b.value);
            getPenalty();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    q.slider("value", q.slider("value"));
    
    r = jQuery("#newloaninterestslider").slider({
        range: "min",
        value: parseFloat(jQuery("#newloaninterest").val()),
        min: 0,
        max: 10,
        step: 0.25,
        slide: function(a, b) {
            jQuery("#newloaninterest").val(b.value);
            getPenalty();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    r.slider("value", r.slider("value"));
   
    jQuery("#loanamount").change(function() {
        p.slider("value", this.value.replace(/[^\d\.]/g,
                ""));
    });
    
    jQuery("#loaninterest").change(function() {
        q.slider("value", this.value.replace(/[^\d\.]/g,
                ""));
    });
    
     jQuery("#newloaninterest").change(function() {
        r.slider("value", this.value.replace(/[^\d\.]/g,
                ""));
    });

}