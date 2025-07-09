function getQueryVariable(variable) {
  var query = parent.window.location.search.substring(1);
  var vars = query.split("&");
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  }
  return false;
}

$(document).ready(function () {
  if (getQueryVariable("loanamount") != "") {
    $(".loanamount").val(
      formatdollor(parseInt(getQueryVariable("loanamount")), "$")
    );
  }
});

function getEquity() {
  var num = parseInt(
    jQuery("#loanamount")
      .val()
      .replace(/[^\d\.]/g, "")
  );

  if (isNaN(num)) {
    num = 0;
  }

  var mortgage = parseInt(
    jQuery("#leftamount")
      .val()
      .replace(/[^\d\.]/g, "")
  );

  if (isNaN(mortgage)) {
    mortgage = 0;
  }
   jQuery("#equityamount").val("15,000");
  var loanval = num * 0.8;
  var equity = loanval - mortgage;

  if (equity <= 0) {
    jQuery("#equityamount").unbind("change");
    jQuery("#equityamount").val("0");
    jQuery("#curmort").html(
      Globalize.format(
        Math.round(
          parseInt(
            jQuery("#leftamount")
              .val()
              .replace(/[^\d\.]/g, "")
          )
        ),
        "n",
        "en-US"
      )
    );
    jQuery("#add-equity").html("0");
    jQuery("#new-mort").html(
      Globalize.format(
        Math.round(
          parseInt(
            jQuery("#leftamount")
              .val()
              .replace(/[^\d\.]/g, "")
          )
        ),
        "n",
        "en-US"
      )
    );
    // t = jQuery("#equityamountslider").slider({
    //   range: "min",
    //   value: parseInt(
    //     jQuery("#equityamount")
    //       .val()
    //       .replace(/[^\d\.]/g, "")
    //   ),
    //   min: 0,
    //   max: 0,
    //   step: 0,
    //   slide: function (a, b) {},
    //   change: function (a) {
    //     a.originalEvent;
    //   },
    // });
    // t.slider("value", t.slider("value"));
    jQuery("#equity").css("color", "red");
    jQuery("#equity").html(Globalize.format(Math.round(equity), "n", "en-US"));
    jQuery("#mortamount").html(Globalize.format(Math.round(num), "n", "en-US"));
    jQuery("#left-amount").html(
      Globalize.format(Math.round(mortgage), "n", "en-US")
    );
  } else {
    jQuery("#curmort").html(
      Globalize.format(
        Math.round(
          parseInt(
            jQuery("#leftamount")
              .val()
              .replace(/[^\d\.]/g, "")
          )
        )
      )
    );
    jQuery("#add-equity").html(
      Globalize.format(
        Math.round(
          parseInt(
            jQuery("#equityamount")
              .val()
              .replace(/[^\d\.]/g, "")
          )
        ),
        "n",
        "en-US"
      )
    );
    jQuery("#new-mort").html(
      Globalize.format(
        Math.round(
          parseInt(
            jQuery("#equityamount")
              .val()
              .replace(/[^\d\.]/g, "")
          ) +
            parseInt(
              jQuery("#leftamount")
                .val()
                .replace(/[^\d\.]/g, "")
            )
        ),
        "n",
        "en-US"
      )
    );
    // t = jQuery("#equityamountslider").slider({
    //   range: "min",
    //   value: parseInt(
    //     jQuery("#equityamount")
    //       .val()
    //       .replace(/[^\d\.]/g, "")
    //   ),
    //   min: 0,
    //   max: parseInt(equity),
    //   step: parseInt(equity / 200),
    //   slide: function (a, b) {
    //     jQuery("#equityamount").val(
    //       Globalize.format(Math.round(b.value), "n", "en-US")
    //     );
    //     jQuery("#curmort").html(
    //       Globalize.format(
    //         Math.round(
    //           parseInt(
    //             jQuery("#leftamount")
    //               .val()
    //               .replace(/[^\d\.]/g, "")
    //           )
    //         ),
    //         "n",
    //         "en-US"
    //       )
    //     );
    //     jQuery("#add-equity").html(
    //       Globalize.format(
    //         Math.round(
    //           parseInt(
    //             jQuery("#equityamount")
    //               .val()
    //               .replace(/[^\d\.]/g, "")
    //           )
    //         ),
    //         "n",
    //         "en-US"
    //       )
    //     );
    //     jQuery("#new-mort").html(
    //       Globalize.format(
    //         Math.round(
    //           parseInt(
    //             jQuery("#equityamount")
    //               .val()
    //               .replace(/[^\d\.]/g, "")
    //           ) +
    //             parseInt(
    //               jQuery("#leftamount")
    //                 .val()
    //                 .replace(/[^\d\.]/g, "")
    //             )
    //         ),
    //         "n",
    //         "en-US"
    //       )
    //     );
    //     debt_console();
    //   },
    //   change: function (a) {
    //     a.originalEvent;
    //   },
    // });
    // t.slider("value", t.slider("value"));

    jQuery("#equity").css("color", "green");
    jQuery("#equity").html(Globalize.format(Math.round(equity), "n", "en-US"));
    jQuery("#mortamount").html(Globalize.format(Math.round(num), "n", "en-US"));
    jQuery("#left-amount").html(
      Globalize.format(Math.round(mortgage), "n", "en-US")
    );
  }
}

var discharge_fee =
  '{"AL":{"hsbc":"5","rbc":"5","bmo":"0"},\n\
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

function getPenalty() {
  var mortgage = parseInt(
    jQuery("#loanamount")
      .val()
      .replace(/[^\d\.]/g, "")
  );

  if (isNaN(mortgage)) {
    mortgage = 0;
  }

  // var mortgagerate = parseInt(
  //   jQuery("#loaninterest")
  //     .val()
  //     .replace(/[^\d\.]/g, "")
  // );

  // if (isNaN(mortgagerate)) {
    mortgagerate = 0;
  //}

  var penalty = "0";
  var discharge = "0";
  var total_penalty = "0";

  if (jQuery(".mort-type:checked").val() == "variable") {
    penalty = (mortgage / 100) * mortgagerate * (3 / 12);
    var fee = JSON.parse(discharge_fee);
    discharge =
      fee[jQuery("#province").find("option:selected").val()][
        jQuery("#provider").find("option:selected").val()
      ];
    total_penalty = parseInt(penalty) + parseInt(discharge);
    jQuery("#discharge-fee").val(discharge);
    jQuery("#mortgage-penalty").val(
      Globalize.format(Math.abs(total_penalty), "n", "en-US")
    );
  } else {
    var start_date = new Date(
      jQuery("#year").find("option:selected").val(),
      jQuery("#month").find("option:selected").val(),
      jQuery("#date").find("option:selected").val()
    );
    var end_date = new Date();
    var months =
      (end_date.getFullYear() - start_date.getFullYear()) * 12 +
      (end_date.getMonth() - start_date.getMonth());
    var total_months =
      parseInt(jQuery("#mort-term").find("option:selected").text()) * 12;
    var diff_months = parseInt(total_months) - parseInt(months);

    // var newrate = parseInt(
    //   jQuery("#newloaninterest")
    //     .val()
    //     .replace(/[^\d\.]/g, "")
    // );
    // if (isNaN(newrate)) {
      newrate = 0;
   // }

    var rate_diff = mortgagerate - newrate;
    var month_interest = (mortgage * rate_diff) / 100 / 12;
    penalty = diff_months * month_interest;
    var fee = JSON.parse(discharge_fee);
    discharge =
      fee[jQuery("#province").find("option:selected").val()][
        jQuery("#provider").find("option:selected").val()
      ];
    total_penalty = parseInt(penalty) + parseInt(discharge);
    jQuery("#discharge-fee").val(discharge);
    jQuery("#mortgage-penalty").val(
      "$" + Globalize.format(Math.abs(total_penalty), "n", "en-US")
    );
  }

  if (total_penalty <= 0) {
    jQuery("#mortgage-penalty").css("color", "red");
  } else {
    jQuery("#mortgage-penalty").css("color", "green");
  }
}

jQuery(document).ready(function () {
  //jQuery("#datepicker").datepicker();

  jQuery(".debt-outstand").keyup(function () {
    jQuery(this).val(
      Globalize.format(
        jQuery(this)
          .val()
          .replace(/[^\d\.]/g, ""),
        "n",
        "en-US"
      )
    );
    debt_console();
  });

  jQuery("#cur-mort").keyup(function () {
    jQuery(this).val(
      Globalize.format(
        jQuery(this)
          .val()
          .replace(/[^\d\.]/g, ""),
        "n",
        "en-US"
      )
    );
    debt_console();
  });

  jQuery(".mort-type").click(function () {
    getPenalty();
  });

  jQuery("#mort-term").change(function () {
    getPenalty();
  });

  jQuery("#date").change(function () {
    getPenalty();
  });

  jQuery("#month").change(function () {
    getPenalty();
  });

  jQuery("#year").change(function () {
    getPenalty();
  });

  jQuery("#province").change(function () {
    getPenalty();
  });

  jQuery("#provider").change(function () {
    getPenalty();
  });

  H("Property Value", 3e6, 5e3, 50e4, 20, 20, 30, 0.5, 25, 2.99, 1.99);
  getPenalty();
  getEquity();
  debt_console();
});

function H(a, e, z, b, k, I, A, M, K, R, S) {
  jQuery("#loanamount").unbind("change");
  jQuery("#leftamount").unbind("change");
  //jQuery("#loaninterest").unbind("change");
  //jQuery("#newloaninterest").unbind("change");

  // p = jQuery("#loanamountslider").slider({
  //   range: "min",
  //   value: 0,
  //   min: 0,
  //   max: e,
  //   step: z,
  //   slide: function (a, b) {
  //     jQuery("#loanamount").val(
  //       Globalize.format(Math.round(b.value), "n", "en-US")
  //     );
  //     jQuery("#loan-amount").html(
  //       Globalize.format(
  //         Math.round(
  //           parseInt(
  //             jQuery("#loanamount")
  //               .val()
  //               .replace(/[^\d\.]/g, "")
  //           )
  //         ),
  //         "n",
  //         "en-US"
  //       )
  //     );
  //     getPenalty();
  //     debt_console();
  //     getEquity();
  //   },
  //   change: function (a) {
  //     a.originalEvent;
  //   },
  // });
  // p.slider("value", p.slider("value"));
  // q = jQuery("#loaninterestslider").slider({
  //   range: "min",
  //   value: 0,
  //   min: 0,
  //   max: 10,
  //   step: 0.25,
  //   slide: function (a, b) {
  //     jQuery("#loaninterest").val(b.value);
  //     getPenalty();
  //     debt_console();
  //   },
  //   change: function (a) {
  //     a.originalEvent;
  //   },
  // });
  // q.slider("value", q.slider("value"));

  // r = jQuery("#newloaninterestslider").slider({
  //   range: "min",
  //   value: 0,
  //   min: 0,
  //   max: 10,
  //   step: 0.25,
  //   slide: function (a, b) {
  //     jQuery("#newloaninterest").val(b.value);
  //     getPenalty();
  //     debt_console();
  //   },
  //   change: function (a) {
  //     a.originalEvent;
  //   },
  // });
  // r.slider("value", r.slider("value"));
  // s = jQuery("#leftamountslider").slider({
  //   range: "min",
  //   value: 0,
  //   min: 0,
  //   max: e,
  //   step: z,
  //   slide: function (a, b) {
  //     jQuery("#leftamount").val(
  //       Globalize.format(Math.round(b.value), "n", "en-US")
  //     );
  //     getEquity();
  //     debt_console();
  //   },
  //   change: function (a) {
  //     a.originalEvent;
  //   },
  // });
  // s.slider("value", s.slider("value"));

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
    //s.slider("value", this.value.replace(/[^\d\.]/g, ""));
    getEquity();
    getPenalty();
  });
jQuery(document).ready(function () {
  function updateLoanAmount() {
    var loanAmount = Math.round(
      jQuery("#loanamount")
        .val()
        .replace(/[^\d\.]/g, "")
    );

    jQuery("#loanamount").val(Globalize.format(loanAmount, "n", "en-US"));
    jQuery("#loan-amount").html(Globalize.format(loanAmount, "n", "en-US"));
  }

  jQuery("#loanamount").keyup(updateLoanAmount);

  updateLoanAmount();

  getPenalty();
  getEquity();
});

//   jQuery("#loanamount").keyup(function () {
//     jQuery("#loanamount").val(
//       Globalize.format(
//         Math.round(
//           jQuery("#loanamount")
//             .val()
//             .replace(/[^\d\.]/g, "")
//         ),
//         "n",
//         "en-US"
//       )
//     );
//     jQuery("#loan-amount").html(
//       Globalize.format(
//         Math.round(
//           parseInt(
//             jQuery("#loanamount")
//               .val()
//               .replace(/[^\d\.]/g, "")
//           )
//         ),
//         "n",
//         "en-US"
//       )
//     );
//   // p.slider("value", this.value.replace(/[^\d\.]/g, ""));
//     getPenalty();
//     getEquity();
//   });
 
 
  // jQuery("#loaninterest").keyup(function () {
  //   jQuery("#loaninterest").val(
  //     Globalize.format(
  //       jQuery("#loaninterest")
  //         .val()
  //         .replace(/[^\d\.]/g, ""),
  //       "n",
  //       "en-US"
  //     )
  //   );
  //  // q.slider("value", this.value.replace(/[^\d\.]/g, ""));
  //   getPenalty();
  // });

  // jQuery("#newloaninterest").keyup(function () {
  //   jQuery("#newloaninterest").val(
  //     Globalize.format(
  //       jQuery("#newloaninterest")
  //         .val()
  //         .replace(/[^\d\.]/g, ""),
  //       "n",
  //       "en-US"
  //     )
  //   );
  //  // r.slider("value", this.value.replace(/[^\d\.]/g, ""));
  //   getPenalty();
  // });
}

function debt_console() {
  var total_debt = "0";
  jQuery(".debt-outstand").each(function () {
    total_debt =
      parseInt(total_debt) +
      parseInt(
        $(this)
          .val()
          .replace(/[^\d\.]/g, "")
      );
  });
  jQuery("#non-mort-debt").val(
    "$" + Globalize.format(total_debt, "n", "en-US")
  );
  jQuery("#new-non-mort-debt").val(
    "$" + Globalize.format(total_debt, "n", "en-US")
  );
  jQuery("#mort-debt").val("$" + jQuery("#leftamount").val());
  jQuery("#new-mort-debt").val("$" + jQuery("#new-mort").html());
  jQuery("#total-debt").val(
    "$" +
      Globalize.format(
        parseInt(
          $("#leftamount")
            .val()
            .replace(/[^\d\.]/g, "")
        ),
        "n",
        "en-US"
      )
  );
  jQuery("#new-total-debt").val(
    "$" +
      Globalize.format(
        parseInt(
          jQuery("#mortgage-penalty")
            .val()
            .replace(/[^\d\.]/g, "")
        ) +
          parseInt(total_debt) +
          parseInt(
            $("#new-mort")
              .html()
              .replace(/[^\d\.]/g, "")
          ),
        "n",
        "en-US"
      )
  );
  // jQuery("#exist-rate").val(
  //   Globalize.format(
  //     jQuery("#loaninterest")
  //       .val()
  //       .replace(/[^\d\.]/g, ""),
  //     "n",
  //     "en-US"
  //   ) + " %"
  // );
  // jQuery("#new-rate").val(
  //   Globalize.format(
  //     jQuery("#newloaninterest")
  //       .val()
  //       .replace(/[^\d\.]/g, ""),
  //     "n",
  //     "en-US"
  //   ) + " %"
  // );
  emi_calculate();

  var num = parseInt(
    jQuery("#loanamount")
      .val()
      .replace(/[^\d\.]/g, "")
  );

  if (
    num * 0.8 >
    parseInt(
      $("#new-total-debt")
        .val()
        .replace(/[^\d\.]/g, "")
    )
  ) {
    jQuery("#consolid").show();
    jQuery("#non-consolid").hide();
  } else {
    jQuery("#consolid").hide();
    jQuery("#non-consolid").show();
  }
}

function emi_calculate() {
  var principle = jQuery("#new-mort")
    .html()
    .replace(/[^\d\.]/g, "");
  var num_years = 25;
  // var rate = jQuery("#newloaninterest")
  //   .val()
  //   .replace(/[^\d\.]/g, "");
  var rate = 0;
  var payment_frequency = jQuery("#month").find("option:selected").val();

  var number_of_payments = num_years * get_pay_periods(payment_frequency);

  var desired_interest_rate = rate / 100 / get_pay_periods(payment_frequency);

  var installment =
    principle *
    ((desired_interest_rate *
      Math.pow(1 + desired_interest_rate, number_of_payments)) /
      (Math.pow(1 + desired_interest_rate, number_of_payments) - 1));

  jQuery("#new-pay").val(
    "$" + Globalize.format(Math.round(installment), "n", "en-US")
  );

  var old_principle = jQuery("#mort-debt")
    .val()
    .replace(/[^\d\.]/g, "");
  var old_rate = jQuery("#loaninterest")
    .val()
    .replace(/[^\d\.]/g, "");
  var old_num_years = 25;
  var old_payment_frequency = jQuery("#month").find("option:selected").val();

  var old_number_of_payments =
    old_num_years * get_pay_periods(old_payment_frequency);

  var old_desired_interest_rate =
    old_rate / 100 / get_pay_periods(old_payment_frequency);

  var old_installment =
    old_principle *
    ((old_desired_interest_rate *
      Math.pow(1 + old_desired_interest_rate, old_number_of_payments)) /
      (Math.pow(1 + old_desired_interest_rate, old_number_of_payments) - 1));

  jQuery("#old-pay").val(
    "$" + Globalize.format(Math.round(old_installment), "n", "en-US")
  );
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
