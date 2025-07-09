/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#affordability-calc .mr-calc-tabs .mr-holder a").click(function(e) {
e.preventDefault();
switchTabs($(this));
});

	function switchTabs(to) {
		var income = $('#annual_income').val();
		if (income === '') {
			$('#annual_income').css("background-color", "#C3D9F0");
			alert('please-enter-your-annual-income-to-get-started');
			$('#annual_income').focus();
			return;
		}

		if (!to.hasClass("selected")) {
			$("#affordability-calc .mr-calc-tabs .mr-holder").removeClass("selected");
			to.parent().parent().addClass("selected");

			if (to.hasClass("input")) {
				$("#afford-output").hide();
				$("#afford-input").show();
			} else {
				$("#afford-input").hide();
				$("#afford-output").show();
			}
		}
	}

 $(document).ready(function(){
    $.ajax({
                  type: "post",
                  url: "/offlinemsg/Mortgage/web/app_dev.php/get-province-city",
                  async: true,
                  data : {'province' : $("#province").val()},
                  success: function(response){ 
                     var data=JSON.parse(response);
                    
                     $("#city").empty();
                     
                     var str='<option>Select City</option>';
                     for(var key in data) 
                     {
                        str += '<option value="'+(data[key]['city']).toLowerCase().replace(" ","-")+'">'+data[key]['city']+'</option>';
                     }
                     
                     $("#city").append(str);
                  },
                  error: function (request,error) {
                     alert('No data');
                }
        }); 
 });
 
 $(document).on("click","",function(){
    $.ajax({
                  type: "post",
                  url: "/offlinemsg/Mortgage/web/app_dev.php/get-province-city",
                  async: true,
                  data : {'province' : $("#province").val()},
                  success: function(response){ 
                     var data=JSON.parse(response);
                    
                     $("#city").empty();
                     
                     var str='<option>Select City</option>';
                     for(var key in data) 
                     {
                        str += '<option value="'+(data[key]['city']).toLowerCase().replace(" ","-")+'">'+data[key]['city']+'</option>';
                     }
                     
                     $("#city").append(str);
                  },
                  error: function (request,error) {
                     alert('No data');
                }
        }); 
 });