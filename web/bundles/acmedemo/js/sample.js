var c, d, f, g, h, l, m, n, p, q, r, s, t, u = [],
    v = [],
    w = [],
    x = [],
    y = [],
    B = [],
    C = [],
    D = [],
    E = [],
    F = [],
    G = "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" ");
jQuery(document).ready(function() {
    n = "home-loan";
    jQuery("ul.loanproduct-nav li").click(function() {
        "active" != jQuery(this).attr("class") && (jQuery(this).addClass("active").siblings().removeClass("active"), n = jQuery(this).attr("id"), "home-loan" == n ? H("Home Loan Required", 1E7, 5E4, 25E5, 20, 10.5, 30, 0.5, 240) : "personal-loan" == n ? H("Personal Loan Amount", 15E5, 1E4, 35E4, 25, 17.5, 5, 0.25, 36) : "car-loan" == n && H("Car Loan Amount", 2E6, 1E4, 4E5, 20, 12.5, 7, 0.25, 60), J());
        return !1
    });
    jQuery("#startmonthyear").attr("readonly", !0);
    jQuery("#startmonthyear").datepicker({
        dateFormat: "MM yy",
        changeMonth: !0,
        changeYear: !0,
        showButtonPanel: !0,
        onChangeMonthYear: function(a, e) {
            h = new Date(a, e - 1, 1);
            jQuery(this).datepicker("setDate", new Date(a, e - 1, 1))
        },
        onClose: function() {
            jQuery(this).datepicker("getDate").toDateString() != h.toDateString() && J()
        },
        beforeShow: function() {
            0 < (selDate = jQuery(this).val()).length && (t = selDate.substring(selDate.length - 4, selDate.length), s = jQuery.inArray(selDate.substring(0, selDate.length - 5), jQuery(this).datepicker("option",
                "monthNames")), jQuery(this).datepicker("option", "defaultDate", new Date(t, s, 1)), jQuery(this).datepicker("setDate", new Date(t, s, 1)))
        }
    });
    jQuery("#startmonthyear").datepicker("setDate", new Date);
    jQuery("#loanamount").blur(function() {
        jQuery("#loanamount").val(Globalize.format(Math.round(jQuery("#loanamount").val().replace(/[^\d\.]/g, "")), "n", "en-IN"))
    });
    jQuery("#loaninterest").blur(function() {
        jQuery("#loaninterest").val(Math.round(1E3 * jQuery("#loaninterest").val().replace(/[^\d\.]/g, "")) / 1E3)
    });
    jQuery("#loanterm").blur(function() {
        "loanyears" ==
        jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loanterm").val(Math.round(Math.round(12 * jQuery("#loanterm").val().replace(/[^\d\.]/g, "")) / 12 * 100) / 100) : jQuery("#loanterm").val(jQuery("#loanterm").val().replace(/[^\d\.]/g, ""))
    });
    jQuery("#emicalcalulatorform input[name='loantenure']").change(function() {
        "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loanterm").val(Math.round(jQuery("#loanterm").val().replace(/[^\d\.]/g, "") / 12 *
            100) / 100) : jQuery("#loanterm").val(Math.round(12 * jQuery("#loanterm").val().replace(/[^\d\.]/g, "")));
        L()
    });
    jQuery("#emicalcalulatorform input[name='emischeme']").change(function() {
        J()
    });
    H("Home Loan Required", 1E7, 5E4, 25E5, 20, 10.5, 30, 0.5, 240);
    J()
});

function H(a, e, z, b, k, I, A, M, K) {
    jQuery("#loanamount").unbind("change");
    jQuery("#loaninterest").unbind("change");
    jQuery("#loanterm").unbind("change");
    jQuery("label[for=loanamount]").html("<strong>" + a + "</strong>");
    jQuery("#loanamount").val(Globalize.format(b, "n", "en-IN"));
    jQuery("#loaninterest").val(1E3 * I / 1E3);
    "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loanterm").val(K / 12) : jQuery("#loanterm").val(K);
    p = jQuery("#loanamountslider").slider({
        range: "min",
        value: parseInt(jQuery("#loanamount").val().replace(/[^\d\.]/g,
            "")),
        min: 0,
        max: e,
        step: z,
        slide: function(a, b) {
            jQuery("#loanamount").val(Globalize.format(Math.round(b.value), "n", "en-IN"))
        },
        change: function(a) {
            a.originalEvent && J()
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
            jQuery("#loaninterest").val(b.value)
        },
        change: function(a) {
            a.originalEvent && J()
        }
    });
    q.slider("value", q.slider("value"));
    a = parseInt(jQuery("#loanterm").val());
    "loanmonths" ==
    jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() && (a = parseInt(jQuery("#loanterm").val()) / 12);
    r = jQuery("#loantermslider").slider({
        range: "min",
        value: a,
        min: 0,
        max: A,
        step: M,
        slide: function(a, b) {
            "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loanterm").val(b.value) : jQuery("#loanterm").val(12 * b.value)
        },
        change: function(a) {
            a.originalEvent && J()
        }
    });
    r.slider("value", r.slider("value"));
    jQuery("#loanamount").change(function() {
        p.slider("value", this.value.replace(/[^\d\.]/g,
            ""));
        J()
    });
    jQuery("#loaninterest").change(function() {
        q.slider("value", this.value);
        J()
    });
    jQuery("#loanterm").change(function() {
        "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? r.slider("value", this.value) : r.slider("value", this.value / 12);
        J()
    });
    L();
    "car-loan" == n ? jQuery(".toggle-hidden").removeClass("toggle-hidden").addClass("toggle-visible") : jQuery(".toggle-visible").removeClass("toggle-visible").addClass("toggle-hidden");
    "home-loan" == n ? (jQuery("#emiadvancearrears").removeClass("show_element").addClass("hide_element"),
        jQuery("#emicalcalulatorinnerform").css("height", "448px"), jQuery("#bbhomeloan").removeClass("hide_element").addClass("show_element"), jQuery("#bbpersonalloan").removeClass("show_element").addClass("hide_element"), jQuery("#bbcarloan").removeClass("show_element").addClass("hide_element"), jQuery(".featuredposts").css("height", "207px")) : "personal-loan" == n ? (jQuery("#emiadvancearrears").removeClass("show_element").addClass("hide_element"), jQuery("#emicalcalulatorinnerform").css("height", "340px"), jQuery("#bbpersonalloan").removeClass("hide_element").addClass("show_element"),
        jQuery("#bbhomeloan").removeClass("show_element").addClass("hide_element"), jQuery("#bbcarloan").removeClass("show_element").addClass("hide_element"), jQuery(".featuredposts").css("height", "207px")) : "car-loan" == n && (jQuery("#emiadvancearrears").removeClass("hide_element").addClass("show_element"), jQuery("#emicalcalulatorinnerform").css("height", "395px"), jQuery("#bbcarloan").removeClass("hide_element").addClass("show_element"), jQuery("#bbhomeloan").removeClass("show_element").addClass("hide_element"),
        jQuery("#bbpersonalloan").removeClass("show_element").addClass("hide_element"), jQuery(".featuredposts").css("height", "262px"))
}

function L() {
    "home-loan" == n ? (jQuery("#loanamountsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 25%;">|<br/><span class="marker">25L</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">50L</span></span><span class="tick" style="left: 75%;">|<br/><span class="marker">75L</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">100L</span></span>'), jQuery("#loanintereststeps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">5</span></span><span class="tick" style="left: 16.67%;">|<br/><span class="marker">7.5</span></span><span class="tick" style="left: 33.34%;">|<br/><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">12.5</span></span><span class="tick" style="left: 66.67%;">|<br/><span class="marker">15</span></span><span class="tick" style="left: 83.34%;">|<br/><span class="marker">17.5</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">20</span></span>'),
            "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loantermsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 16.67%;">|<br/><span class="marker">5</span></span><span class="tick" style="left: 33.33%;">|<br/><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">15</span></span><span class="tick" style="left: 66.67%;">|<br/><span class="marker">20</span></span><span class="tick" style="left: 83.33%;">|<br/><span class="marker">25</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">30</span></span>') :
            jQuery("#loantermsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 16.67%;">|<br/><span class="marker">60</span></span><span class="tick" style="left: 33.33%;">|<br/><span class="marker">120</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">180</span></span><span class="tick" style="left: 66.67%;">|<br/><span class="marker">240</span></span><span class="tick" style="left: 83.33%;">|<br/><span class="marker">300</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">360</span></span>')) :
        "personal-loan" == n ? (jQuery("#loanamountsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 16.67%;">|<br/><span class="marker">2.5L</span></span><span class="tick" style="left: 33.34%;">|<br/><span class="marker">5L</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">7.5L</span></span><span class="tick" style="left: 66.67%;">|<br/><span class="marker">10L</span></span><span class="tick" style="left: 83.34%;">|<br/><span class="marker">12.5L</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">15L</span></span>'),
            jQuery("#loanintereststeps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">5</span></span><span class="tick" style="left: 12.5%;">|<br/><span class="marker">7.5</span></span><span class="tick" style="left: 25%;">|<br/><span class="marker">10</span></span><span class="tick" style="left: 37.5%;">|<br/><span class="marker">12.5</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">15</span></span><span class="tick" style="left: 62.5%;">|<br/><span class="marker">17.5</span></span><span class="tick" style="left: 75%;">|<br/><span class="marker">20</span></span><span class="tick" style="left: 87.5%;">|<br/><span class="marker">22.5</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">25</span></span>'),
            "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loantermsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 20%;">|<br/><span class="marker">1</span></span><span class="tick" style="left: 40%;">|<br/><span class="marker">2</span></span><span class="tick" style="left: 60%;">|<br/><span class="marker">3</span></span><span class="tick" style="left: 80%;">|<br/><span class="marker">4</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">5</span>') :
            jQuery("#loantermsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 20%;">|<br/><span class="marker">12</span></span><span class="tick" style="left: 40%;">|<br/><span class="marker">24</span></span><span class="tick" style="left: 60%;">|<br/><span class="marker">36</span></span><span class="tick" style="left: 80%;">|<br/><span class="marker">48</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">60</span>')) :
        "car-loan" == n && (jQuery("#loanamountsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 25%;">|<br/><span class="marker">5L</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">10L</span></span><span class="tick" style="left: 75%;">|<br/><span class="marker">15L</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">20L</span></span>'), jQuery("#loanintereststeps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">5</span></span><span class="tick" style="left: 16.67%;">|<br/><span class="marker">7.5</span></span><span class="tick" style="left: 33.34%;">|<br/><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br/><span class="marker">12.5</span></span><span class="tick" style="left: 66.67%;">|<br/><span class="marker">15</span></span><span class="tick" style="left: 83.34%;">|<br/><span class="marker">17.5</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">20</span></span>'),
            "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loantermsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 14.29%;">|<br/><span class="marker">1</span></span><span class="tick" style="left: 28.57%;">|<br/><span class="marker">2</span></span><span class="tick" style="left: 42.86%;">|<br/><span class="marker">3</span></span><span class="tick" style="left: 57.14%;">|<br/><span class="marker">4</span></span><span class="tick" style="left: 71.43%;">|<br/><span class="marker">5</span></span><span class="tick" style="left: 85.71%;">|<br/><span class="marker">6</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">7</span></span>') :
            jQuery("#loantermsteps").html('<span class="tick" style="left: 0%;">|<br/><span class="marker">0</span></span><span class="tick" style="left: 14.29%;">|<br/><span class="marker">12</span></span><span class="tick" style="left: 28.57%;">|<br/><span class="marker">24</span></span><span class="tick" style="left: 42.86%;">|<br/><span class="marker">36</span></span><span class="tick" style="left: 57.14%;">|<br/><span class="marker">48</span></span><span class="tick" style="left: 71.43%;">|<br/><span class="marker">60</span></span><span class="tick" style="left: 85.71%;">|<br/><span class="marker">72</span></span><span class="tick" style="left: 100%;">|<br/><span class="marker">84</span></span>'))
}

function J() {
    jQuery("#emicalcalulatorform").mask("Calculating EMI...");
    setTimeout(N, 10)
}

function N() {
    c = Math.abs(jQuery("#loanamount").val().replace(/[^\d\.]/g, ""));
    d = Math.abs(jQuery("#loaninterest").val() / 12 / 100);
    f = "loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? Math.abs(Math.round(12 * jQuery("#loanterm").val())) : Math.abs(jQuery("#loanterm").val());
    0 == d && (jQuery("#loaninterest").val(5), d = 0.004166666666666667, q.slider("value", 5));
    0 == f && ("loanyears" == jQuery("#emicalcalulatorform input[name='loantenure']:checked").val() ? jQuery("#loanterm").val(1) : jQuery("#loanterm").val(12),
        r.slider("value", 1), f = 12);
    l = 0;
    "emiadvance" == jQuery("#emicalcalulatorform input[name='emischeme']:checked").val() && (l = 1);
    g = "car-loan" == n && 1 == l ? Math.pow(1 + d, f - 1) / (Math.pow(1 + d, f) - 1) * d * c : Math.pow(1 + d, f) / (Math.pow(1 + d, f) - 1) * d * c;
    jQuery("#emiamount span").text(Globalize.format(Math.round(g), "n", "en-IN"));
    jQuery("#emitotalinterest span").text(Globalize.format(Math.round(g * f - c), "n", "en-IN"));
    jQuery("#emitotalamount span").text(Globalize.format(Math.round(g * f), "n", "en-IN"));
    u = [];
    v = [];
    w = [];
    x = [];
    y = [];
    B = [];
    C = [];
    D = [];
    E = [];
    F = [];
    B[0] = new Date(h.getTime());
    "car-loan" == n && 1 == l ? (D[0] = 0, C[0] = g) : (D[0] = c * d, C[0] = g - D[0]);
    E[0] = c - C[0];
    F[0] = (c - E[0]) / c * 100;
    var a = B[0].getFullYear(),
        e = 0;
    u[e++] = a;
    v[a] = C[0];
    w[a] = D[0];
    x[a] = E[0];
    y[a] = F[0];
    for (i = 1; i < f; i++) B[i] = new Date(B[i - 1].getTime()), B[i].setMonth(B[i].getMonth() + 1), D[i] = E[i - 1] * d, C[i] = g - D[i], E[i] = E[i - 1] - C[i], F[i] = (c - E[i]) / c * 100, B[i].getFullYear() != a && (a = B[i].getFullYear(), u[e++] = a, v[a] = 0, w[a] = 0, x[a] = 0, y[a] = 0), v[a] += C[i], w[a] += D[i], x[a] = E[i], y[a] = F[i];
    E[f - 1] = 0;
    x[a] = 0;
    F[f -
        1] = 100;
    y[a] = 100;
    O();
    P();
    Q();
    jQuery("#emicalcalulatorform").unmask()
}

function P() {
    for (var a = [], e = [], z = [], b = [], k = 0, k = 0, I = u.length; k < I; k++) {
        var A = u[k];
        a[k] = A;
        e[k] = v[A];
        z[k] = w[A];
        b[k] = x[A]
    }
    new Highcharts.Chart({
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
            categories: a,
            labels: {
                rotation: -45,
                align: "right",
                style: {
                    font: "normal 9px Verdana, sans-serif"
                },
                formatter: function() {
                    return this.value
                }
            }
        },
        yAxis: [{
            min: 0,
            title: {
                text: "EMI Payment / year"
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
                formatter: function() {
                    return "\u20b9 " + Globalize.format(this.value, "n", "en-IN")
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
                formatter: function() {
                    return "\u20b9 " + Globalize.format(this.value, "n", "en-IN")
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
            formatter: function() {
                return "Balance" ==
                    this.series.name ? "<b>Year: " + this.x + "</b><br/>" + this.series.name + " : \u20b9 " + Globalize.format(this.y, "n", "en-IN") + "<br/>Loan Paid To Date : " + Globalize.format((c - this.y) / c * 100, "n2", "en-IN") + "%" : "<b>Year : " + this.x + "</b><br/>" + this.series.name + " : \u20b9 " + Globalize.format(this.y, "n", "en-IN") + "<br/>Total Payment : \u20b9 " + Globalize.format(this.point.stackTotal, "n", "en-IN")
            }
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
            data: z,
            yAxis: 0,
            legendIndex: 2,
            color: "#ED8C2B"
        }, {
            name: "Principal",
            data: e,
            yAxis: 0,
            legendIndex: 1,
            color: "#88A825"
        }, {
            name: "Balance",
            data: b,
            type: "spline",
            yAxis: 1,
            legendIndex: 3,
            color: "#B8204C"
        }]
    })
}

function Q() {
    m = '<table><tr><th id="yearheader">Year</th><th id="principalheader">Principal<br/>(A)</th><th id="interestheader">Interest<br/>(B)</th><th id="totalheader">Total Payment<br/>(A + B)</th><th id="balanceheader">Balance</th><th id="paidtodateheader">Loan Paid To Date</th></tr>';
    for (var a = 0, e = 0, z = u.length; e < z; e++) {
        var b = u[e];
        m += '<tr class="yearlypaymentdetails"><td id="year' + b + '" class="paymentyear toggle">' + b + '</td><td class="currency">\u20b9 ' + Globalize.format(v[b], "n", "en-IN") + '</td><td class="currency">\u20b9 ' +
            Globalize.format(w[b], "n", "en-IN") + '</td><td class="currency">\u20b9 ' + Globalize.format(v[b] + w[b], "n", "en-IN") + '</td><td class="currency">\u20b9 ' + Globalize.format(x[b], "n", "en-IN") + '</td><td class="paidtodateyear">' + Globalize.format(y[b], "n2", "en-IN") + "%</td></tr>";
        m += '<tr id="monthyear' + b + '" class="monthlypaymentdetails"><td class="monthyearwrapper" colspan="6"><div id="monthlypaymentcontainer"><table>';
        for (var k = B.length; a < k && B[a].getFullYear() == b;) m += '<tr><td class="paymentmonthyear">' + G[B[a].getMonth()] +
            '</td><td class="currency">\u20b9 ' + Globalize.format(C[a], "n", "en-IN") + '</td><td class="currency">\u20b9 ' + Globalize.format(D[a], "n", "en-IN") + '</td><td class="currency">\u20b9 ' + Globalize.format(C[a] + D[a], "n", "en-IN") + '</td><td class="currency">\u20b9 ' + Globalize.format(E[a], "n", "en-IN") + '</td><td class="paidtodatemonthyear">' + Globalize.format(F[a++], "n2", "en-IN") + "%</td></tr>";
        m += "</table></div></td></tr>"
    }
    m += "</table>";
    jQuery("#emipaymenttable").html(m);
    jQuery("#emipaymenttable tr.monthlypaymentdetails").find("div").hide();
    jQuery("#emipaymenttable td.toggle").click(function() {
        var a = jQuery(this).attr("id");
        jQuery(this).toggleClass("toggle-open");
        jQuery("tr#month" + a).find("div").slideToggle()
    })
}

function O() {
    new Highcharts.Chart({
        chart: {
            renderTo: "emipiechart",
            plotBackgroundColor: null,
            borderWidth: null,
            plotBorderWidth: null,
            plotShadow: !1
        },
        title: {
            text: "Break-up of Total Payment"
        },
        tooltip: {
            formatter: function() {
                return "<b>" + this.point.name + ": " + Math.round(100 * this.percentage) / 100 + "%</b>"
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: !0,
                cursor: "pointer",
                dataLabels: {
                    enabled: !0,
                    distance: 10,
                    color: "#444444",
                    formatter: function() {
                        return "<b>" + Math.round(100 * this.percentage) / 100 + "%</b>"
                    }
                },
                showInLegend: !0
            }
        },
        series: [{
            type: "pie",
            name: "Principal Loan Amount vs. Total Interest",
            data: [
                ["Principal Loan Amount", c], {
                    name: "Total Interest",
                    y: g * f - c,
                    sliced: !0,
                    selected: !0
                }
            ]
        }]
    })
};