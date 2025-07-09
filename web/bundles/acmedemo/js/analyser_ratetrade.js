function emi_calculate() {
  var principle = jQuery("#loanamount")
    .val()
    .replace(/[^\d\.]/g, "");
  var num_years = jQuery("#loanterm")
    .val()
    .replace(/[^\d\.]/g, "");
  $(".property-error").html("");
  $(".ammort-error").html("");
  if (
    jQuery("#loanamount")
      .val()
      .replace(/[^\d\.]/g, "") == ""
  ) {
    $(".property-error").html("Please enter property value");
  }
  if (
    parseInt(
      jQuery("#loanamount")
        .val()
        .replace(/[^\d\.]/g, "")
    ) > 3000000
  ) {
    $(".property-error").html("Mortgage value must be below $3,000,000");
    $("#loanamount").val("3000000");
  }
  if (
    jQuery("#loanterm")
      .val()
      .replace(/[^\d\.]/g, "") == ""
  ) {
    $(".ammort-error").html("Please enter ammortization period");
  }
  if (
    parseInt(
      jQuery("#mortrate")
        .val()
        .replace(/[^\d\.]/g, "")
    ) > 20
  ) {
    $("#mortrate").val("10");
  }
  if (
    parseInt(
      jQuery("#loanterm")
        .val()
        .replace(/[^\d\.]/g, "")
    ) > 25
  ) {
    $("#loanterm").val("25");
  }
  var rate = jQuery("#mortrate")
    .val()
    .replace(/[^\d\.]/g, "");
  var payments = [
    "monthly",
    "semi_monthly",
    "bi_weekly",
    "acc_bi_weekly",
    "weekly",
    "acc_weekly",
  ];

  for (var i = 0; i < payments.length; i++) {
    var number_of_payments = num_years * get_pay_periods(payments[i]);

    var desired_interest_rate = rate / 100 / get_pay_periods(payments[i]);

    var installment =
      principle *
      ((desired_interest_rate *
        Math.pow(1 + desired_interest_rate, number_of_payments)) /
        (Math.pow(1 + desired_interest_rate, number_of_payments) - 1));

    var ammort = num_years;

    if (payments[i] === "acc_bi_weekly") {
      ammort = (
        (num_years * get_pay_periods("acc_bi_weekly")) /
        get_pay_periods("bi_weekly")
      ).toFixed(2);
    }

    if (payments[i] === "acc_weekly") {
      ammort = (
        (num_years * get_pay_periods("acc_weekly")) /
        get_pay_periods("weekly")
      ).toFixed(2);
    }

    if (!isNaN(Math.round(installment))) {
      if (Globalize.format(Math.round(installment)) != "Infinity") {
        jQuery(".emi-" + payments[i]).html(
          "$ " + Globalize.format(Math.round(installment), "n", "en-US")
        );
        jQuery("." + payments[i] + "-ammort").html(ammort);
      }
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

jQuery(document).ready(function () {
  H("Property Value", 3e6, 5e3, 50e4, 20, 20, 30, 0.5, 25, 2.99);
});

function H(a, e, z, b, k, I, A, M, K, R) {
  jQuery("#loanamount").unbind("change");
  jQuery("#loanterm").unbind("change");
  jQuery("#mortrate").unbind("change");

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

  jQuery("#loanterm").keyup(function () {
    jQuery("#loanterm").val(
      jQuery("#loanterm")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  });

  jQuery("#mortrate").keyup(function () {
    jQuery("#mortrate").val(
      jQuery("#mortrate")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  });

  jQuery(".payment-ana").click(function () {
    emi_calculate();
  });
}
