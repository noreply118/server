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

function emi_calculate()
{
    var principle = jQuery("#mort-reqd").val().replace(/[^\d\.]/g, "");
    console.log(principle);
    var num_years = jQuery("#loanterm").val().replace(/[^\d\.]/g, "");
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

    console.log('insatll' + installment);

    jQuery(".emi-data").html('$ ' + Globalize.format(Math.round(installment)));
}

function get_pay_periods(payment_frequency) {
    if (payment_frequency === "monthly") {
        return 12;
    } else if (payment_frequency === "semi_monthly") {
        return 12 * 2;
    } else if (payment_frequency === "acc_bi_weekly") {
        return 52 / 2;
    } else if (payment_frequency === "weekly") {
        return 52;
    } else {
        return 1;
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

jQuery(document).ready(function () {

    jQuery("#loanamount").keyup(function () {
        jQuery("#loanamount").val(Globalize.format(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
        jQuery("#loanamount-res").val(Globalize.format(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN");
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#loaninterest").keyup(function () {
        jQuery("#loaninterest").val(jQuery("#loaninterest").val().replace(/[^\d\.]/g, ""));
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#loanterm").keyup(function () {
        jQuery("#loanterm").val(jQuery("#loanterm").val().replace(/[^\d\.]/g, ""));
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#mortrate").keyup(function () {
        jQuery("#mortrate").val(jQuery("#mortrate").val().replace(/[^\d\.]/g, ""));
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery(".payment-freq").click(function () {
        chmc_calculate();
        emi_calculate();
        load();
    });

    jQuery("#down-payment").val(parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")) * parseInt(jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) / 100);
    H("Property Value", 1E6, 5E3, 50E4, 20, 20, 30, 0.5, 25, 2.99);
    chmc_calculate();
    emi_calculate();
    load();
});

jQuery(document).on("click", "#emipaymenttable td.toggle", function () {
    var a = jQuery(this).attr("id");
    jQuery(this).toggleClass("toggle-open");
    jQuery("tr#month" + a).find("div").slideToggle();
});

function H(a, e, z, b, k, I, A, M, K, R) {
    jQuery("#loanamount").unbind("change");
    jQuery("#loanamount-res").unbind("change");
    jQuery("#loaninterest").unbind("change");
    jQuery("#loanterm").unbind("change");
    jQuery("#mortrate").unbind("change");
    jQuery("#loanamount").val(Globalize.format(b, "n", "en-IN"));
    jQuery("#loanamount-res").val(Globalize.format(b, "n", "en-IN"));
    jQuery("#loaninterest").val(I);
    jQuery("#mortrate").val(R);
    jQuery("#loanterm").val(K);
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g,
                "")),
        min: 0,
        max: e,
        step: z,
        slide: function (a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
            jQuery("#loanamount-res").val(Globalize.format(Math.round(b.value), "n", "en-IN"));
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
        value: parseFloat(jQuery("#loaninterest").val()),
        min: 5,
        max: k,
        step: 0.25,
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

    r = jQuery("#loantermslider").slider({
        range: "min",
        value: parseInt(jQuery("#loanterm").val()),
        min: 0,
        max: A,
        step: M,
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
        value: parseFloat(jQuery("#mortrate").val()),
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

    jQuery("#loanamount").change(function () {
        p.slider("value", this.value.replace(/[^\d\.]/g,
                ""));
    });

    jQuery("#loaninterest").change(function () {
        q.slider("value", this.value);
    });

    jQuery("#loanterm").change(function () {
        r.slider("value", this.value);
    });

    jQuery("#mortrate").change(function () {
        s.slider("value", this.value);
    });
}

function load(){
    
    var principals = parseInt(jQuery("#mort-reqd").val().replace(/[^0-9-.]/g, ''));
        var years = jQuery("#loanterm").val();
        var rates = jQuery("#mortrate").val();
        var breakupreq = null;
        breakupreq = jQuery.ajax({
            type: "post",
            url: "/get-ammort-table/" + principals + "/" + years + "/" + rates + "/" + jQuery(".payment-freq:checked").val(),
            async: true,
            beforeSend : function(){           
                      if(breakupreq != null) {
                           breakupreq.abort();
                       }
            },
            success: function (response) {

                var data = JSON.parse(response);
                $("#emipaymenttable").empty();
                jQuery('#container').highcharts({
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

                jQuery('#container1').highcharts({
                    chart: {
                        renderTo: "emibarchart",
                        defaultSeriesType: "column",
                        borderWidth: 0,
                        spacingLeft: 0,
                        spacingRight: 0
                    },
                    title: {
                        text: ""
                    },
                    xAxis: {
                        categories: years,
                        labels: {
                            rotation: -45,
                            align: "right",
                            style: {
                                font: "normal 9px Verdana, sans-serif"
                            },
                            formatter: function () {
                                return this.value
                            }
                        }
                    },
                    yAxis: [{
                            min: 0,
                            title: {
                                text: "Mortgage Payment / year"
                            },
                            stackLabels: {
                                enabled: !1,
                                style: {
                                    fontWeight: "bold",
                                    color: Highcharts.theme &&
                                            Highcharts.theme.c || "gray"
                                }
                            },
                            opposite: !0,
                            labels: {
                                formatter: function () {
                                    return "\u0024 " + this.value
                                }
                            }
                        }, {
                            min: 0,
                            title: {
                                text: "Balance"
                            },
                            stackLabels: {
                                enabled: !1,
                                style: {
                                    fontWeight: "bold",
                                    color: Highcharts.theme && Highcharts.theme.c || "gray"
                                }
                            },
                            labels: {
                                formatter: function () {
                                    return "\u0024 " + this.value
                                }
                            }
                        }],
                    legend: {
                        align: "right",
                        x: -120,
                        verticalAlign: "top",
                        y: -10,
                        floating: !0,
                        backgroundColor: Highcharts.theme && Highcharts.theme.k || "white",
                        shadow: !1
                    },
                    tooltip: {
                        text: ""
                    },
                    plotOptions: {
                        column: {
                            stacking: "normal",
                            dataLabels: {
                                enabled: !1,
                                color: Highcharts.theme && Highcharts.theme.j || "white"
                            }
                        }
                    },
                    series: [{
                            name: "Interest",
                            data: interest,
                            yAxis: 0,
                            legendIndex: 2,
                            color: "#ED8C2B"
                        }, {
                            name: "Principal",
                            data: principal,
                            yAxis: 0,
                            legendIndex: 1,
                            color: "#88A825"
                        }, {
                            name: "Balance",
                            data: balance,
                            type: "spline",
                            yAxis: 1,
                            legendIndex: 3,
                            color: "#B8204C"
                        }]
                });
                
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
             <td id="year' + data['schedule'][i]['year'] + '" class="paymentyear toggle">' + data['schedule'][i]['year'] + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['yprincipal']) + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['interest']) + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['installment']) + '</td>\n\
             <td class="currency">' + Globalize.format(data['schedule'][i]['balance']) + '</td>\n\
             <td class="paidtodateyear">' + data['schedule'][i]['loan_returned'] + '%</td></tr>\n\
             <tr id="monthyear' + data['schedule'][i]['year'] + '" class="monthlypaymentdetails">\n\
               <td class="monthyearwrapper" colspan="6">\n\
              <div style="display: none;" >\n\
              <table>';

                    for (var j = 0; j < data['schedule'][i]['months'].length; j++)
                    {
                        str += '<tr style="color:blue;"><td class="paymentmonthyear">' + data['schedule'][i]['months'][j]['month'] + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['principal']) + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['interest']) + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['installment']) + '</td>\n\
                   <td class="currency">' + Globalize.format(data['schedule'][i]['months'][j]['balance']) + '</td>\n\
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