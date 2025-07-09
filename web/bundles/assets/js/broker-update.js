
                    $(document).on("change", ".required", function () {
                        $(this).css('border', '1px solid green');

                        if ($(this).val() == '')
                        {
                            $(this).focus();
                            $(this).css('border', '1px solid red');
                        }

                        var id = $(this).attr('id');
                        if (id == 'email' && !validateEmail($("#email").val()))
                        {
                            $("#email").focus();
                            $("#email").css('border', '1px solid red');
                        }
                    });

                    $(document).on("click", "#submit", function (e) {

                        $("#disclaimer_error").html('');

                        if ($("#fname").val() == '')
                        {
                            $("#fname").focus();
                            $("#fname").css('border', '1px solid red');
                        }
                        else if ($("#lname").val() == '')
                        {
                            $("#lname").focus();
                            $("#lname").css('border', '1px solid red');
                        }
                        else if ($("#email").val() == '')
                        {
                            $("#email").focus();
                            $("#email").css('border', '1px solid red');
                        }
                        else if (!validateEmail($("#email").val()))
                        {
                            $("#email").css('border', '1px solid red');
                            $("#email").focus();
                        }
                        else if ($("#phone").val() == '')
                        {
                            $("#phone").focus();
                            $("#phone").css('border', '1px solid red');
                        }
                        else if ($('#disclaimer').is(':checked') == false)
                        {
                            $("#disclaimer_error").html('Please check the box and agree the condition');
                        }
                        else {
                            var currentRequest = null;
                            $("#submit").text("Please Wait..");
                            var formData = {
                                fname: $("#fname").val(),
                                lname: $("#lname").val(),
                                email: $("#email").val(),
                                phone: $("#phone").val(),
                                city: $("#city").val(),
                                brokerage_name: $("#brokerage_name").val(),
                                brokerage_licence: $("#brokerage_licence").val(),
                                mortgage_reg_no: $("#mortgage_reg_no").val(),
                                weburl: $("#weburl").val(),
                                variable: $("#variable").val(),
                                fixed: $("#fixed").val(),
                                message: $("#message").val()
                            };
                            currentRequest = $.ajax({
                                type: "post",
                                async: true,
                                url: "symfonyratetrade/web/bundles/assets/php/broker-update.php",
                                data: formData,
                                beforeSend: function () {
                                    if (currentRequest != null) {
                                        currentRequest.abort();
                                    }
                                },
                                success: function (response) {
                                    $("#submit").text("Submit");
                                    $("#success").text("Thank you for registered with us. Login information will shared by email shortly.");
                                    $("#success").css('color', 'green');
                                    $("#fname").val("");
                                    $("#lname").val("");
                                    $("#email").val("");
                                    $("#phone").val("");
                                    $("#city").val("");
                                    $("#brokerage_name").val("");
                                    $("#weburl").val("");
                                    $("#message").val("");
                                    $("#brokerage_licence").val("");
                                    $("#mortgage_reg_no").val("");
                                    $("#variable").val("");
                                    $("#fixed").val("");
                                    $(".required").removeAttr('style');
                                },
                                error: function (request, error) {
                                    $("#success").text("Failed! Try Again");
                                    $("#success").css('color', 'red');
                                    $("#submit").text("Submit");
                                }
                            });
                        }
                    });