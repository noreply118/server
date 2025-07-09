  function getQueryVariable(variable)
            {
                var query = parent.window.location.search.substring(1);
                var vars = query.split("&");
                for (var i = 0; i < vars.length; i++) {
                    var pair = vars[i].split("=");
                    if (pair[0] == variable) {
                        return pair[1];
                    }
                }
                return(false);
            } function getEquity()
        {
           var num=parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));
           
           if(isNaN(num))
           {
             num = 0;
           }
           if (parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")) > 3000000 )
    {
        $(".property-error").html("Property value must be below $3,000,000");
        $("#loanamount").val("3,000,000");
    }
           var mortgage=parseInt(jQuery("#leftamount").val().replace(/[^\d\.]/g, ""));
           
           if(isNaN(mortgage))
           {
             mortgage = 0;
           }
           if (parseInt(jQuery("#leftamount").val().replace(/[^\d\.]/g, "")) > 3000000 )
    {
        $(".leftamount-error").html("Remaining value must be below $3,000,000");
        $("#leftamount").val("3,000,000");
    } 
           var loanval = num * 0.8;
           var equity = loanval - mortgage;
           jQuery("#max-loan").val(Globalize.format(loanval));
           jQuery("#equity").val(Globalize.format(Math.abs(equity)));
           
           if(equity <= 0)
           {
             jQuery("#equity").css("color","red");  
             jQuery("#msg").html('You cannot access equity');
           }
           else
           {
             jQuery("#equity").css("color","green");  
             jQuery("#msg").html('You can access equity upto <span style="color:#993A00;">'+Globalize.format(Math.abs(equity))+'</span>');
           }
        }       


jQuery(document).ready(function() {

    jQuery(".equity-cal").click(function() {
        getEquity();
    });

    jQuery("#loanamount").keyup(function () {
       
        jQuery("#loanamount").val(
          Globalize.format(
            Math.round(
              jQuery("#loanamount")
                .val()
                .replace(/[^\d\.]/g, "")
            ),
            "n",
            "en-US"
          )
        );
    });
    jQuery("#leftamount").keyup(function () {
       
        jQuery("#leftamount").val(
          Globalize.format(
            Math.round(
              jQuery("#leftamount")
                .val()
                .replace(/[^\d\.]/g, "")
            ),
            "n",
            "en-US"
          )
        );
    });
  
    H("Property Value", 3E6, 5E3, 50E4, 20, 20, 30, 0.5, 25, 2.99);
   
    if (getQueryVariable("house_price") != '')
    {
        jQuery("#loanamount").val(formatdollor(parseInt(getQueryVariable("house_price")), "$"));
        $("#loanamountslider").click();
    }
});

function H(a, e, z, b, k, I, A, M, K, R) {
    jQuery("#loanamount").unbind("change");
    jQuery("#leftamount").unbind("change");
    jQuery("#loanamount").val(Globalize.format(b, "n", "en-IN"));
    jQuery("#leftamount").val(Globalize.format(25E4, "n", "en-IN"));
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g,
                "")),
        min: 0,
        max: e,
        step: z,
        slide: function(a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
            getEquity();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    p.slider("value", p.slider("value"));
    q = jQuery("#leftamountslider").slider({
        range: "min",
        value: 25E4,
        min: 0,
        max: e,
        step: z,
        slide: function(a, b) {
            jQuery("#leftamount").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
            getEquity();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    q.slider("value", q.slider("value"));
   
    jQuery("#loanamount").change(function() {
        p.slider("value", this.value.replace(/[^\d\.]/g,
                ""));
    });
    
    jQuery("#leftamount").change(function() {
        q.slider("value", this.value.replace(/[^\d\.]/g,
                ""));
    });

}