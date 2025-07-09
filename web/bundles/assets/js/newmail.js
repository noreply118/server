   $('#locationName').click(function(e) {
                                                        $('.loclist').show(100);
                                                    });
                                                    $('.loclist').blur(function(e) {
                                                        $(this).hide(100);
                                                    });
                                                    $('#fixedBtn').click(function(e) {
                                                        if ($(this).hasClass('active-btn'))
                                                        {
                                                            e.preventDefault();

                                                        }
                                                        else
                                                        {
                                                            $(this).addClass('active-btn');
                                                            $('#variableBtn').removeClass('active-btn');
                                                            $('#variaTab').hide(100);
                                                            $('#fixedTab').show(100);

                                                        }
                                                    });
                                                    $('#variableBtn').click(function(e) {
                                                        if ($(this).hasClass('active-btn'))
                                                        {
                                                            e.preventDefault();
                                                        }
                                                        else
                                                        {
                                                            $(this).addClass('active-btn');
                                                            $('#fixedBtn').removeClass('active-btn');
                                                            $('#fixedTab').hide(100);
                                                            $('#variaTab').show(100);
                                                        }
                                                    });

                                                    function getSelected() {

                                                        document.getElementById('locationName').value = document.getElementById('locationList').value;

                                                        $('#locationList').hide(100);
                                                    }

                                                    $('#agentLocationName').click(function(e) {
                                                        $('#agentLocation').show(100);
                                                    });
                                                    $('#agentLocation').blur(function(e) {
                                                        $(this).hide(100);
                                                    });

                                                    function capitalizeFirstLetter(string) {
                                                        return string.charAt(0).toUpperCase() + string.slice(1);
                                                    }

                                                    $('#agentLocationName').on('input', function() {
                                                        // Getiing option based on input value and setting it as selected
                                                        $('#agentLocation option:contains(' + capitalizeFirstLetter(this.value) + ')').eq(0).prop('selected', true);
                                                    });

                                                    function getPop() {

                                                        //document.getElementById('locationName').value = document.getElementById('locationList').text;
                                                        $('#agentLocationName').val($('option:selected', $('#agentLocation')).text());
                                                        $('#agentLocation').hide(100);
                                                    }

                                                    function validateEmail(email) {
                                                        var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                                        return re.test(email);
                                                    }

                                                    $(document).on("click", ".subsc", function(e) {
                                                        e.preventDefault();
                                                        $("#exampleInputEmail2").css('border', '1px solid green');

                                                        if ($("#exampleInputEmail2") == '')
                                                        {
                                                            $("#exampleInputEmail2").focus();
                                                            $("#exampleInputEmail2").css('border', '1px solid red');
                                                        }
                                                        else if (!validateEmail($("#exampleInputEmail2").val()))
                                                        {
                                                            $("#exampleInputEmail2").css('border', '1px solid red');
                                                            $("#exampleInputEmail2").focus();
                                                        }
                                                        else {
															                                                            $.ajax({
                                                                url: '/email_subscribe',
                                                                type: "post",
                                                                async: true,
                                                                data: {'email': $("#exampleInputEmail2").val(),
                                                                    'name': "testname"},
                                                                success: function(response) {
                                                                    $("#exampleInputEmail2").val('');
                                                                    alert(response);
                                                                },
                                                                error: function(request, error) {
                                                                    // alert('No data found');
                                                                }
                                                            });
                                                        }
                                                    });

                                                    $(document).on("change", ".required", function() {
                                                        $(this).css('border', '1px solid green');

                                                        if ($(this).val() == '')
                                                        {
                                                            $(this).focus();
                                                            $(this).css('border', '1px solid red');
                                                        }

                                                        var id = $(this).attr('id');
                                                        if (id == 'EmailId' && !validateEmail($("#EmailId").val()))
                                                        {
                                                            $("#EmailId").focus();
                                                            $("#EmailId").css('border', '1px solid red');
                                                        }
                                                    });

                                                    $(document).on("click", ".lead-submit", function(e) {

                                                        if ($("#urName").val() == '')
                                                        {
                                                            $("#urName").focus();
                                                            $("#urName").css('border', '1px solid red');
                                                        }
                                                        else if ($("#EmailId").val() == '')
                                                        {
                                                            $("#EmailId").focus();
                                                            $("#EmailId").css('border', '1px solid red');
                                                        }
                                                        else if (!validateEmail($("#EmailId").val()))
                                                        {
                                                            $("#EmailId").css('border', '1px solid red');
                                                            $("#EmailId").focus();
                                                        }
                                                        else if ($("#phonenUmber").val() == '')
                                                        {
                                                            $("#phonenUmber").focus();
                                                            $("#phonenUmber").css('border', '1px solid red');
                                                        }
                                                        else {
                                                            var currentRequest = null;
                                                            $(".lead-submit").text("Please Wait..");
                                                            var formData = {
                                                                fname: $("#urName").val(),
                                                                email: $("#EmailId").val(),
                                                                phone: $("#phonenUmber").val(),
                                                                message: $("#rate-request").val(),
                                                                location: $("#agentLocationName").val(),
                                                                besttime: $("#bestTime").find("option:selected").text(),
                                                                purpose: $("#lookingFor").find("option:selected").text()
                                                            };
                                                            currentRequest = $.ajax({
                                                                type: "post",
                                                                async: true,
                                                                url: "https://www.ratetrade.ca/lead-update.php",
                                                                data: formData,
                                                                beforeSend: function() {
                                                                    if (currentRequest != null) {
                                                                        currentRequest.abort();
                                                                    }
                                                                },
                                                                success: function(response) {
                                                                    $(".lead-submit").text("Submit");
                                                                    $(".required").removeAttr('style');
                                                                    $("#agentModal1").modal('hide');
                                                                    alert("Query Successful");
                                                                    window.location.href = '/thank-you';
                                                                },
                                                                error: function(request, error) {
                                                                    $(".lead-submit").text("Submit");
                                                                    $(".required").removeAttr('style');
                                                                    alert("Query Failed");
                                                                }
                                                            });
                                                        }
                                                    });