function getEquity()
{
    var num = parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));

    if (isNaN(num))
    {
        num = 0;
    }

    var mortgage = parseInt(jQuery("#leftamount").val().replace(/[^\d\.]/g, ""));

    if (isNaN(mortgage))
    {
        mortgage = 0;
    }

    var loanval = num * 0.8;
    var equity = loanval - mortgage;
    jQuery("#max-loan").val(Globalize.format(loanval));
    jQuery("#equity").val(Globalize.format(Math.abs(equity)));

    if (equity <= 0)
    {
        jQuery("#equity").css("color", "red");
        jQuery("#msg").show();
        jQuery("#equity-div").hide();
    }
    else
    {
        jQuery("#equity").css("color", "green");
        jQuery("#msg").hide();
        jQuery("#equity-div").show();
    }

    jQuery("#equityaccess").unbind("change");
    jQuery("#equityaccess").val(0);
    jQuery("#equity-slide").html(Globalize.format(equity, "n", "en-IN"));
    s = jQuery("#equityslider").slider({
        range: "min",
        value: 0,
        min: 0,
        max: equity,
        step: 5E3,
        slide: function(a, b) {
            jQuery("#equityaccess").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
        },
        change: function(a) {
            a.originalEvent
        }
    });
    s.slider("value", s.slider("value"));

    jQuery("#equityaccess").change(function() {
        s.slider("value", this.value.replace(/[^\d\.]/g,""));
    });

}


jQuery(document).ready(function() {

    jQuery("#loanamount").keyup(function() {
        jQuery("#loanamount").val(Globalize.format(Math.round(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN"));
        getEquity();
    });

    jQuery("#leftamount").keyup(function() {
        jQuery("#leftamount").val(Globalize.format(Math.round(jQuery("#leftamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN"));
        getEquity();
    });

    H("Property Value", 1E6, 5E3, 50E4, 20, 12.5, 30, 0.5, 15);
    getEquity();
});

function H(a, e, z, b, k, I, A, M, K) {
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