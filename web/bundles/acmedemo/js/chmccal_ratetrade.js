function mortgage_insurance(loan_value) {

    if (loan_value < 0.0 || loan_value > 0.95)
    {
        return -1;
    }

    if (loan_value <= 0.80)
    {
        return 0.0;
    }
    else if (loan_value <= 0.85)
    {
        return 0.0180;
    }
    else if (loan_value <= 0.90)
    {
        return 0.0240;
    }
    else if (loan_value <= 0.95)
    {
        return 0.036;
    }

}

function chmc_calculate()
{
    var propertyval = '0';
    if(jQuery("#loanamount").val().replace(/[^\d\.]/g, "") != '')
    {
      $(".property-error").html("");
      propertyval = parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));
    }
    else
    {
       $(".property-error").html("Please enter property value"); 
    }
    if (parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")) > 3000000 )
    {
        $(".property-error").html("Property value must be below $3,000,000");
        $("#loanamount").val("3000000");
    }
   if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 5)
    {
        $(".down-error").html("Minimum Downpayment Allowed is 5% ");
         $("#loaninterest").val("5");
    }
   if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) > 20)
    {
         $(".down-error").html("Maximum Downpayment Allowed is 20% ");
         $("#loaninterest").val("20");
    }
    var downpay_per = parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
    var downpayment = propertyval * downpay_per / 100;

    var chmc = '0';
    if (downpay_per < 20)
    {
        chmc = (propertyval - downpayment) * mortgage_insurance(1 - downpay_per / 100);
        if (parseInt(chmc) >= 0)
        {
            jQuery("#chmc-ins").val(Globalize.format(Math.round(chmc), "n", "en-US"));
        }
    }
    else
    {
        jQuery("#chmc-ins").val(chmc);
    }
}

jQuery(document).ready(function () {

    H("Property Value",  3E6, 5E3, 50E4, 20, 20, 30, 0.5, 25, 2.99);
    //chmc_calculate();
    $(".down-error").hide();
});

function H(a, e, z, b, k, I, A, M, K) {
    jQuery("#loanamount").unbind("change");
    jQuery("#loaninterest").unbind("change");
    jQuery("#loanamount").val('');
    jQuery("#loaninterest").val('');
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: 0,
        min: 0,
        max: e,
        step: z,
        slide: function (a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-US"));
            chmc_calculate();
        },
        change: function (a) {
            a.originalEvent
        }
    });
    p.slider("value", p.slider("value"));
    q = jQuery("#loaninterestslider").slider({
        range: "min",
        value: 0,
        min: 5,
        max: k,
        step: 0.25,
        slide: function (a, b) {
            jQuery("#loaninterest").val(b.value);
            chmc_calculate();
        },
        change: function (a) {
            a.originalEvent
        }
    });
    q.slider("value", q.slider("value"));

    jQuery("#loanamount").keyup(function () {
        jQuery("#loanamount").val(Globalize.format(Math.round(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-US"));
        p.slider("value", this.value.replace(/[^\d\.]/g,""));
        chmc_calculate();
    });

    jQuery("#loaninterest").keyup(function () {
        q.slider("value", this.value);
        if (jQuery("#loaninterest").val() !== '')
        {
            if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 5)
            {
                $(".down-error").show();
                chmc_calculate();
            }
            else
            {
                $(".down-error").hide();
                jQuery("#loaninterest").val(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
                chmc_calculate();
            }
        }
    });
}