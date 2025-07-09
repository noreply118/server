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


function emi_calculate()
{
    var principle = jQuery("#mort-reqd").val().replace(/[^\d\.]/g, "");
    var num_years = jQuery("#loanterm").val().replace(/[^\d\.]/g, "");
    $(".ammort-error").html("");
    $(".property-error").html("");
    $(".down-error").html("");
    $(".rate-error").html("");

    if (jQuery("#loanamount").val().replace(/[^\d\.]/g, "") == '')
    {
        $(".property-error").html("Please enter property value");
    }

   if (parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")) > 3000000 )
    {
        $(".property-error").html("Property value must be below $3,000,000");
        $("#loanamount").val("3000000");
    }
    if (jQuery("#loaninterest").val().replace(/[^\d\.]/g, "") == '')
    {
        $(".down-error").html("Please enter downpayment");
    }

    if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 5)
    {
        $(".down-error").html("Minimum downpayment Allowed 5%");
       
    }
     if (jQuery("#mortrate").val().replace(/[^\d\.]/g, "") == '')
    {
        $(".rate-error").html("Please enter Mortgage Rate");
    }
    if (jQuery("#loanterm").val().replace(/[^\d\.]/g, "") == '')
    {
        $(".ammort-error").html("Please enter ammortization period");
    }
    if (parseInt(jQuery("#loanterm").val().replace(/[^\d\.]/g, "")) > 35)
    {

    }
   if (parseInt(jQuery("#mortrate").val().replace(/[^\d\.]/g, "")) > 10)
    {
        $("#mortrate").val("10");
    }

    if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) > 30)
    {
       
        $("#loaninterest").val("35");
    }
        if (jQuery("#mortrate").val().replace(/[^\d\.]/g, "") == '')
    {
        $(".rate-error").html("Please enter Mortgage Rate");
    }
    if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 20)
    {
        if (parseInt(num_years) > 25 && parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) > 5)
        {
            num_years = '25';
            $(".ammort-error").html("Upto 25 years Ammortization Period allowed for downpayment percent " + jQuery("#loaninterest").val().replace(/[^\d\.]/g, "") + "%.");
$("#loanterm").val("25");
        }
    }

    var rate = jQuery("#mortrate").val().replace(/[^\d\.]/g, "");
    var payment_frequency = '';

    $(".payment-freq").each(function () {

        if ($(this).is(':checked'))
        {
            payment_frequency = $(this).val();
        }
    });

    var number_of_payments = num_years * get_pay_periods(payment_frequency);

    var desired_interest_rate = (rate / 100) / get_pay_periods(payment_frequency);

    var installment = principle * ((desired_interest_rate * Math.pow((1 + desired_interest_rate), number_of_payments)) / (Math.pow((1 + desired_interest_rate), number_of_payments) - 1));

    if(!isNaN(Math.round(installment)))
    {
      if(Globalize.format(Math.round(installment)) != 'Infinity')
      {
       jQuery(".emi-data").html('$ ' + Globalize.format(Math.round(installment), "n", "en-US"));
      }
    }
}

function get_pay_periods(payment_frequency) {
    if (payment_frequency === "monthly") {
        return 12;
    } else if (payment_frequency === "semi_monthly") {
        return 24;
    } else if (payment_frequency === "bi_weekly") {
        return 26;
    } else if (payment_frequency === "acc_bi_weekly") {
        return 24;
    } else if (payment_frequency === "weekly") {
        return 52;
    } else if (payment_frequency === "acc_weekly") {
        return 48;
    } else {
        return 1;
    }
}


function chmc_calculate()
{
    var propertyval = '0';
    if (jQuery("#loanamount").val().replace(/[^\d\.]/g, "") != '')
    {
        $(".property-error").html("");
        propertyval = parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));
    }
    else
    {
        $(".property-error").html("Please enter property value");
    }

    $(".down-error").html("");
    var downpay_per = '0';
    var downpayment = '0';
    if (jQuery("#loaninterest").val().replace(/[^\d\.]/g, "") == '')
    {
        $(".down-error").html("Please enter downpayment");
    }
    else
    {
        if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 5)
        {
          downpay_per = parseInt('5');
          downpayment = propertyval * downpay_per / 100;  
        }
        else{
        downpay_per = parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
        downpayment = propertyval * downpay_per / 100;
        }
    }

    if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) < 5)
    {
        $(".down-error").html("Minimum downpayment Allowed 5%");
    }
    if (parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) > 20)
    {
        $(".down-error").html("Minimum downpayment Allowed 20%");
    }

    jQuery("#down-payment").val(Globalize.format(Math.round(downpayment), "n", "en-US"));

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

    var mortreqd = propertyval - downpayment + parseInt(chmc);
    jQuery("#mort-reqd").val(Globalize.format(Math.round(mortreqd), "n", "en-US"));

}

jQuery(document).ready(function () {

    jQuery(".cal-submit").click(function (e) {
        e.preventDefault();
        chmc_calculate();
        emi_calculate();
        load();
    });

    H("Property Value", 3E6, 5E3, 50E4, 20, 20, 30, 0.5, 25, 2.99);
});

jQuery(document).on("click", "#emipaymenttable td.toggle", function () {
    var a = jQuery(this).attr("id");
    jQuery(this).toggleClass("toggle-open");
    jQuery("tr#month" + a).find("div").slideToggle();
});

function H(a, e, z, b, k, I, A, M, K, R) {
    jQuery("#loanamount").unbind("change");
    jQuery("#loaninterest").unbind("change");
    jQuery("#loanterm").unbind("change");
    jQuery("#mortrate").unbind("change");
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: 0,
        min: 0,
        max: e,
        step: z,
        slide: function (a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-US"));
            if(parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")) >= 1000000)
            {
                $("#down1").hide();
                $("#down2").show();
            }
            else
            {
                $("#down1").show();
                $("#down2").hide();
            }
            chmc_calculate();
            emi_calculate();
            load();
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
        max: 35,
        step: 0.1,
        slide: function (a, b) {
            jQuery("#loaninterest").val(b.value);
            chmc_calculate();
            emi_calculate();
            load();
        },
        change: function (a) {
            a.originalEvent
        }
    });
    q.slider("value", q.slider("value"));
    
    t = jQuery("#loaninterestslider2").slider({
        range: "min",
        value: 0,
        min: 20,
        max: 40,
        step: 0.25,
        slide: function(a, b) {
            jQuery("#loaninterest").val(b.value);
            chmc_calculate();
        },
        change: function(a) {
            a.originalEvent
        }
    });
    t.slider("value", t.slider("value"));

    r = jQuery("#loantermslider").slider({
        range: "min",
        value: 0,
        min: 0,
        max: 35,
        step: 0.1,
        slide: function (a, b) {
            jQuery("#loanterm").val(b.value);
            emi_calculate();
            load();
        },
        change: function (a) {
            a.originalEvent
        }
    });
    r.slider("value", r.slider("value"));

    s = jQuery("#mortrateslider").slider({
        range: "min",
        value: 0,
        min: 0,
        max: 10,
        step: 0.25,
        slide: function (a, b) {
            jQuery("#mortrate").val(b.value);
            emi_calculate();
            load();
        },
        change: function (a) {
            a.originalEvent
        }
    });
    s.slider("value", s.slider("value"));

    jQuery("#loanamount").keyup(function () {
       
        jQuery("#loanamount").val(Globalize.format(Math.round(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-US"));
        p.slider("value", this.value.replace(/[^\d\.]/g,""));
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#loaninterest").keyup(function () {
        jQuery("#loaninterest").val(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
        q.slider("value", this.value);
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#loanterm").keyup(function () {
        jQuery("#loanterm").val(jQuery("#loanterm").val().replace(/[^\d\.]/g, ""));
        r.slider("value", this.value);
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#mortrate").keyup(function () {
        jQuery("#mortrate").val(jQuery("#mortrate").val().replace(/[^\d\.]/g, ""));
        s.slider("value", this.value);
        chmc_calculate();
        emi_calculate();
        load();
    });
}

function load() {

    var principals = parseInt(jQuery("#mort-reqd").val().replace(/[^0-9-.]/g, ''));
    var years = jQuery("#loanterm").val();
    var rates = jQuery("#mortrate").val();
    var breakupreq = null;
    breakupreq = jQuery.ajax({
        type: "post",
        url: "/get-ammort-table/" + principals + "/" + years + "/" + rates + "/" + jQuery(".payment-freq:checked").val(),
        async: true,
        beforeSend: function () {
            if (breakupreq != null) {
                breakupreq.abort();
            }
        },
        success: function (response) {

            var data = JSON.parse(response);
            $("#emipaymenttable").empty();
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Break-up of Total Payment'
                },
                tooltip: {
                    pointFormat: '<b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        },
                        showInLegend: true
                    }
                },
                series: [{
                        name: "Principal Loan Amount Vs Total Interest",
                        colorByPoint: true,
                        data: [{
                                name: "Principal Loan Amount",
                                y: data['breakup']['total-principal']
                            }, {
                                name: "Total Interest",
                                y: data['breakup']['total-interest'],
                                sliced: true,
                                selected: true
                            }]
                    }]
            });

            var years = [];
            var interest = [];
            var principal = [];
            var balance = [];

            for (var i = 0; i < data['schedule'].length; i++)
            {
                years.push(data['schedule'][i]['year']);
                interest.push(data['schedule'][i]['interest']);
                principal.push(data['schedule'][i]['yprincipal']);
                balance.push(data['schedule'][i]['balance']);
            }

            var str = '<table>\n\
        <tr><th id="yearheader">Year</th>\n\
        <th id="principalheader">Principal<br>(A)</th>\n\
        <th id="interestheader">Interest<br>(B)</th>\n\
        <th id="totalheader">Total Payment<br>(A + B)</th>\n\
        <th id="balanceheader">Balance</th>\n\
        <th id="paidtodateheader">Loan Paid To Date</th>\n\
        </tr>';

            for (var i = 0; i < data['schedule'].length; i++)
            {
                years.push(data['schedule'][i]['year']);
                interest.push(data['schedule'][i]['interest']);
                principal.push(data['schedule'][i]['yprincipal']);
                balance.push(data['schedule'][i]['balance']);

                str += '<tr class="yearlypaymentdetails">\n\
             <td id="year' + data['schedule'][i]['year'] + '" class="paymentyear">' + data['schedule'][i]['year'] + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['yprincipal'], "n", "en-US") + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['interest'], "n", "en-US") + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['installment'], "n", "en-US") + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['balance'], "n", "en-US") + '</td>\n\
             <td class="paidtodateyear">' + data['schedule'][i]['loan_returned'] + '%</td></tr>\n\
             <tr id="monthyear' + data['schedule'][i]['year'] + '" class="monthlypaymentdetails">\n\
               <td class="monthyearwrapper" colspan="6">\n\
              <div style="display: none;" >\n\
              <table>';

                for (var j = 0; j < data['schedule'][i]['months'].length; j++)
                {
                    str += '<tr style="color:blue;"><td class="paymentmonthyear">' + data['schedule'][i]['months'][j]['month'] + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['principal'], "n", "en-US") + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['interest'], "n", "en-US") + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['installment'], "n", "en-US") + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['balance'], "n", "en-US") + '</td>\n\
                   <td class="paidtodatemonthyear">' + data['schedule'][i]['months'][j]['loan_returned_month'] + '%</td></tr>';
                }

                str += '</table>\n\
              </div></td></tr>';
            }

            str += '</table>';

            $("#emipaymenttable").append(str);
        }
    });

}