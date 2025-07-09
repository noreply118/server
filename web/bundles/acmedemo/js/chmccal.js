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
    var propertyval = parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));
    var downpay_per = parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
    var downpayment = propertyval * downpay_per / 100;

    jQuery("#down-payment").val(Globalize.format(Math.round(downpayment)));

    var chmc = '0';
    if (downpay_per < 20)
    {
        chmc = (propertyval - downpayment) * mortgage_insurance(1 - downpay_per / 100);
        jQuery("#chmc-ins").val(Globalize.format(Math.round(chmc)));
    }
    else
    {
        jQuery("#chmc-ins").val(chmc);
    }

    var mortreqd = propertyval - downpayment + parseInt(chmc);
    jQuery("#mort-reqd").val(Globalize.format(Math.round(mortreqd)));

}

jQuery(document).ready(function() {

    jQuery("#loanamount").keyup(function() {
        jQuery("#loanamount").val(Globalize.format(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
        jQuery("#loanamount-res").val(Globalize.format(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
        chmc_calculate();
    });

    jQuery("#loaninterest").keyup(function() {

        if (jQuery("#loaninterest").val() !== '')
        {
            if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 5)
            {
                $(".down-error").show();
                jQuery("#loaninterest").val(5);
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

    jQuery("#down-payment").val(parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")) * parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) / 100);
    H("Property Value", 1E6, 5E3, 50E4, 20, 12.5, 30, 0.5, 15);
    chmc_calculate();
    $(".down-error").hide();
});

function H(a, e, z, b, k, I, A, M, K) {
    jQuery("#loanamount").unbind("change");
    jQuery("#loanamount-res").unbind("change");
    jQuery("#loaninterest").unbind("change");
    jQuery("#loanamount").val(Globalize.format(b, "n", "en-IN"));
    jQuery("#loanamount-res").val(Globalize.format(b, "n", "en-IN"));
    jQuery("#loaninterest").val(1E3 * k / 1E3);
    jQuery("#mortrate").val(1E3 * I / 1E3);
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g,
                "")),
        min: 0,
        max: e,
        step: z,
        slide: function(a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
            jQuery("#loanamount-res").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
            chmc_calculate();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    p.slider("value", p.slider("value"));
    q = jQuery("#loaninterestslider").slider({
        range: "min",
        value: parseFloat(jQuery("#loaninterest").val()),
        min: 5,
        max: k,
        step: 0.25,
        slide: function(a, b) {
            jQuery("#loaninterest").val(b.value);
            chmc_calculate();
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

    jQuery("#loaninterest").change(function() {
        q.slider("value", this.value);
    });
}