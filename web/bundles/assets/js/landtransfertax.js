function check_data(){
	prop_val = document.getElementById('Amount').value;
	prov = document.getElementById('Province').value;
 
		if(prov == "Alberta"){
			if(prop_val != 0){
				transfer_tax = ((0.001 * prop_val) + 35);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "British Columbia"){   					// RIGHT!
			if(prop_val <= 200000){
				transfer_tax = (0.01 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 200000){
				transfer_tax = ((0.02 * prop_val) - 2000);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Manitoba"){						   		// RIGHT!
			if(prop_val <= 30000){
				transfer_tax = "0";
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 30000 && prop_val <= 90000){
				transfer_tax = ((0.005 * prop_val) - 110);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 90000 && prop_val <= 150000){
				transfer_tax = ((0.01 * prop_val) - 560);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 150000){
				transfer_tax = ((0.015 * prop_val) - 1350);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "New Brunswick"){				  		// RIGHT!
			if(prop_val != 0){
				transfer_tax = ((0.0025 * prop_val) + 55);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Newfoundland"){		   				// RIGHT!
			if(prop_val != 0){
				transfer_tax = ((0.004 * prop_val) + 50);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Northwest Territories"){
			if(prop_val <= 1000000){
				transfer_tax = ((0.0015 * prop_val) + 40);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 1000000){
				transfer_tax = (0.001 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Nova Scotia, Halifax County"){
			if(prop_val != 0){
				transfer_tax = (0.015 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} 
		}else if(prov == "Nova Scotia, not Halifax County"){
			if(prop_val != 0){
				transfer_tax = (0.0005 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
/*
if Halifax County	(0.015 x price) + 45   // RIGHT!
else				0.0005 x price 
*/
		}else if(prov == "Ontario"){								// RIGHT!
			if(prop_val <= 55000){
				transfer_tax = (0.005 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 55000 && prop_val <= 250000){
				transfer_tax = ((0.01 * prop_val) - 275);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 250000 && prop_val <= 400000){
				transfer_tax = ((0.015 * prop_val) - 1525);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 400000){
				transfer_tax = ((0.02 * prop_val) - 3525);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Prince Edward Island"){
			if(prop_val > 500){
				transfer_tax = (0.01 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}else{
				transfer_tax = 0;
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Quebec"){ 					 		 // RIGHT!
			if(prop_val <= 50000){
				transfer_tax = (0.005 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 50000 && prop_val <= 250000){
				transfer_tax = ((0.01 * prop_val) - 250);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 250000){
				transfer_tax = ((0.015 * prop_val) - 1500);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Saskatchewan"){					 		 // RIGHT!
			if(prop_val <= 1000){
				transfer_tax = "0";
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 1000){
				transfer_tax = ((0.0015 * prop_val) + 15);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}else if(prov == "Yukon"){
			if(prop_val <= 10000){
				transfer_tax = (0.001 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 10000 && prop_val <= 25000){
				transfer_tax = (0.005 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			} else if(prop_val > 25000){
				transfer_tax = (0.0025 * prop_val);
				document.getElementById('ELTT').value = Math.round(transfer_tax*100)/100;
			}
		}
}