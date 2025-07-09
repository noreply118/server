function mortgage_insurance(loan_value) {
  if (loan_value < 0.0 || loan_value > 0.95) {
    return -1;
  }

  if (loan_value <= 0.8) {
    return 0.0;
  } else if (loan_value <= 0.85) {
    return 0.018;
  } else if (loan_value <= 0.9) {
    return 0.024;
  } else if (loan_value <= 0.95) {
    return 0.036;
  }
}

function emi_calculate() {
  var principle = jQuery("#mort-reqd")
    .val()
    .replace("$", "")
    .replace(/[^\d\.]/g, "");
  var num_years = jQuery("#loanterm")
    .val()
    .replace(/[^\d\.]/g, "");

  var downpay_per =
    (parseInt(
      jQuery("#loaninterest")
        .val()
        .replace(/[^\d\.]/g, "")
    ) *
      100) /
    parseInt(
      jQuery("#loanamount")
        .val()
        .replace(/[^\d\.]/g, "")
    );

  $(".ammort-error").html("");
  $(".property-error").html("");
  $(".down-error").html("");
  $(".mortrate-error").html("");

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
    $(".property-error").html("Property value must be below $3,000,000");
    $("#loanamount").val("3000000");
  }
  if (
    jQuery("#loaninterest")
      .val()
      .replace(/[^\d\.]/g, "") == ""
  ) {
    $(".down-error").html("Please enter downpayment");
  }
  if (
    parseInt(
      jQuery("#loaninterest")
        .val()
        .replace(/[^\d\.]/g, "")
    ) > 2000000
  ) {
    $(".down-error").html("Downpayment value must be below $2,000,000");
    $("#loaninterest").val("2000000");
  }
  if (downpay_per < 5) {
    $(".down-error").html("Minimum downpayment Allowed 5%");
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
      jQuery("#loanterm")
        .val()
        .replace(/[^\d\.]/g, "")
    ) > 25
  ) {
    $(".ammort-error").html("Ammortization period value must be below 25 year");
    $("#loanterm").val("25");
  }

  if (
    parseInt(
      jQuery("#loaninterest")
        .val()
        .replace(/[^\d\.]/g, "")
    ) < 20
  ) {
    if (
      parseInt(num_years) > 25 &&
      parseInt(
        jQuery("#loaninterest")
          .val()
          .replace(/[^\d\.]/g, "")
      ) > 5
    ) {
      num_years = "25";
      $(".ammort-error").html(
        "Upto 25 years Ammortization Period allowed for downpayment percent " +
          jQuery("#loaninterest")
            .val()
            .replace(/[^\d\.]/g, "") +
          "%."
      );
    }
  }

  if (
    jQuery("#mortrate")
      .val()
      .replace(/[^\d\.]/g, "") == ""
  ) {
    $(".mortrate-error").html("Please enter mortgage rate");
  }

  var rate = jQuery("#mortrate")
    .val()
    .replace(/[^\d\.]/g, "");

  var number_of_payments = num_years * 12;

  var desired_interest_rate = rate / 100 / 12;

  var installment =
    principle *
    ((desired_interest_rate *
      Math.pow(1 + desired_interest_rate, number_of_payments)) /
      (Math.pow(1 + desired_interest_rate, number_of_payments) - 1));

  if (!isNaN(Math.round(installment))) {
    if (Globalize.format(Math.round(installment)) != "Infinity") {
      jQuery("#emi-data").val(
        "$ " + Globalize.format(Math.round(installment), "n", "en-US")
      );
    }
  }
}

function chmc_calculate() {
  var propertyval = "0";
  if (
    jQuery("#loanamount")
      .val()
      .replace(/[^\d\.]/g, "") != ""
  ) {
    $(".property-error").html("");
    propertyval = parseInt(
      jQuery("#loanamount")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  } else {
    $(".property-error").html("Please enter property value");
  }

  $(".down-error").html("");
  var downpay_per = "0";
  var downpayment = "0";
  if (
    jQuery("#loaninterest")
      .val()
      .replace(/[^\d\.]/g, "") == ""
  ) {
    $(".down-error").html("Please enter downpayment");
  } else {
    downpayment = parseInt(
      jQuery("#loaninterest")
        .val()
        .replace(/[^\d\.]/g, "")
    );
    downpay_per = (downpayment * 100) / propertyval;
  }

  if (
    parseInt(
      jQuery("#loaninterest")
        .val()
        .replace(/[^\d\.]/g, "")
    ) < 5
  ) {
    $(".down-error").html("Minimum downpayment Allowed 5%");
  }

  jQuery("#down-payment").val(
    Globalize.format(Math.round(100 - downpay_per), "n", "en-US")
  );

  var chmc = "0";
  if (downpay_per < 20) {
    chmc =
      (propertyval - downpayment) * mortgage_insurance(1 - downpay_per / 100);
    if (parseInt(chmc) >= 0) {
      jQuery("#chmc-ins").val(
        "$ " + Globalize.format(Math.round(chmc), "n", "en-US")
      );
    }
  } else {
    jQuery("#chmc-ins").val("$ " + chmc);
  }

  var mortreqd = propertyval - downpayment + parseInt(chmc);
  jQuery("#mort-reqd").val(
    "$ " + Globalize.format(Math.round(mortreqd), "n", "en-US")
  );
}

function income_calculate() {
  var proptax_monthly = 0;
  if (
    jQuery("#proptax")
      .val()
      .replace(/[^\d\.]/g, "") != ""
  ) {
    proptax_monthly =
      parseInt(
        jQuery("#proptax")
          .val()
          .replace(/[^\d\.]/g, "")
      ) / 12;
  }
  var heating = 0;
  if (
    jQuery("#heating")
      .val()
      .replace(/[^\d\.]/g, "") != ""
  ) {
    heating = parseInt(
      jQuery("#heating")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  }
  var condo = 0;
  if (
    jQuery("#condo")
      .val()
      .replace(/[^\d\.]/g, "") != ""
  ) {
    condo = parseInt(
      jQuery("#condo")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  }
  var debt = 0;
  if (
    jQuery("#debt")
      .val()
      .replace(/[^\d\.]/g, "") != ""
  ) {
    debt = parseInt(
      jQuery("#debt")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  }
  var emi = parseInt(
    jQuery("#emi-data")
      .val()
      .replace("$", "")
      .replace(/[^\d\.]/g, "")
  );
  var total = proptax_monthly + heating + condo + debt + emi;

  if (!isNaN(Math.round(total))) {
    $("#total-emi").val(
      "$ " + Globalize.format(Math.round(total), "n", "en-US")
    );
  }

  var condo_f = Math.round(condo / 2);
  var total_income =
    ((proptax_monthly + heating + condo_f + emi + debt) * 12) / 0.44;

  if (!isNaN(Math.round(total_income))) {
    $("#income").val(
      "$ " + Globalize.format(Math.round(total_income), "n", "en-US")
    );
  }
}

jQuery(document).ready(function () {
  H("Property Value", 3e6, 5e3, 50e4, 20, 20, 25, 0.5, 25, 2.99);
});

function H(a, e, z, b, k, I, A, M, K, R) {
  jQuery("#loanamount").unbind("change");
  jQuery("#loaninterest").unbind("change");
  jQuery("#loanterm").unbind("change");
  jQuery("#mortrate").unbind("change");
  jQuery("#proptax").unbind("change");
  jQuery("#heating").unbind("change");
  jQuery("#condo").unbind("change");
  jQuery("#debt").unbind("change");

  jQuery(".income-cal").click(function () {
    chmc_calculate();
    emi_calculate();
    income_calculate();
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

  jQuery("#loaninterest").keyup(function () {
    jQuery("#loaninterest").val(
      jQuery("#loaninterest")
        .val()
        .replace(/[^\d\.]/g, "")
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

  jQuery("#proptax").keyup(function () {
    jQuery("#proptax").val(
      jQuery("#proptax")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  });

  jQuery("#heating").keyup(function () {
    jQuery("#heating").val(
      jQuery("#heating")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  });

  jQuery("#condo").keyup(function () {
    jQuery("#condo").val(
      jQuery("#condo")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  });

  jQuery("#debt").keyup(function () {
    jQuery("#debt").val(
      jQuery("#debt")
        .val()
        .replace(/[^\d\.]/g, "")
    );
  });
}
