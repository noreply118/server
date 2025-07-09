/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function provincial_ltt(province, home_price) {
	var functionName = province.toLowerCase() + '_ltt'; 

	// LTT in QC and NS is always municipal
	if (typeof window[functionName] !== 'function' || province === 'QC' || province === "NS") {
		return 0;
	} else {
		return window[functionName](home_price);
	}
}

function municipal_ltt(province, city, home_price) {
	if (province == 'ON' && in_toronto(city)) {
		return to_ltt(home_price);
	} else if (province == 'QC') {
		if (in_montreal(city)) {
			return mtl_ltt(home_price);	
		} else {
			return qc_ltt(home_price);
		}
		
	} else if (province == 'NS') {
		return ns_ltt(home_price, city);
	}

	return 0;
}

var toronto_districts = [
	'toronto', 'east-york', 'north-york', 'york', 'etobicoke', 'scarborough'
];
function in_toronto(city) {
	for (var i = 0; i < toronto_districts.length; i++) {
		var district = toronto_districts[i]
		if (city == district) return true;
	}

	return false;	
}

var montreal_districts = [
	'montreal', 'pierrefonds', 'roxboro', 'saint-laurent', 'lachine', 'lasalle',
	'verdun', 'ville-marie', 'outremont', 'mont-royal', 'st-leonard', 'montreal-nord',
	'anjou'
];
function in_montreal(city) {
	for (var i = 0; i < montreal_districts.length; i++) {
		var district = montreal_districts[i];
		if (city == district) return true;
	}

	return false;
}

function ltt_rebate(province, city, fthb, home_price) {
	var rebate = 0;

	if (fthb) {
		if (province == "ON") {
			rebate += on_rebate(home_price);
			if (in_toronto(city))
				rebate += to_rebate(home_price);
		} else if (province == "BC") {
			rebate += bc_rebate(home_price);
		} else if (province == "PE") {
			rebate += pe_rebate(home_price);
		}
	}

	if (province == "QC" && in_montreal(city)) {
		rebate = null;
	}

	return rebate;
}

//Total land transfer tax
function total_ltt(home_price, province, city) {
	var total = provincial_ltt(province, home_price) + municipal_ltt(province, city, home_price) - ltt_rebate(province, city, home_price);
	return total;
}

function on_ltt(home_price) {
	if (home_price > 400000)
		return (home_price - 400000) * 0.02 + 4475;

	else if (home_price > 250000)
		return (home_price - 250000) * 0.015 + 2225;

	else if (home_price > 55000)
		return (home_price - 55000) * 0.01 + 275;

	else
		return home_price * 0.005;
}

function to_ltt(home_price) {
	if (home_price > 400000)
		return (home_price - 400000) * 0.02 + 3725;

	else if (home_price > 55000)
		return (home_price - 55000) * 0.01 + 275;

	else
		return home_price * 0.005;
}


function qc_ltt(home_price) {
	if (home_price > 250000)
		return (home_price - 250000) * 0.015 + 2250;

	else if (home_price > 50000)
		return (home_price - 50000) * 0.01 + 250;

	else
		return home_price * 0.005;
}

function mtl_ltt(home_price) {
	if (home_price > 500000)
		return qc_ltt(home_price) + (home_price - 500000) * 0.005;

	return qc_ltt(home_price);
}


ns_ltt_table = {
	'annapolis-county': 0.015,
	'antigonish-county': 0.01,
	'colchester-county': 0.01,
	'cumberland-county': 0.015,
	'guysborough-county': 0.01,
	'inverness-county': 0.015,
	'lunenburg-county': 0.01,
	'pictou-county': 0.01,
	'richmond-county': 0.01,
	'kings-county': 0,
	'shelburne-county': 0.015,
	'victoria-county': 0.01,
	'yarmouth-county': 0.01,

	'barrington-district': 0,
	'digby-district': 0.01,
	'lunenburg-district': 0.0125,
	'west-hants-district': 0.01,
	'east-hants-district': 0.015,
	'st-marys-district': 0.0075,

	'cape-breton': 0.015,
	'halifax': 0.015,
	'queens': 0.01,
	
	'advocate-harbour': 'cumberland-county',
	'amherst': 0.0125,
	'annapolis-royal': 'annapolis-county',
	'antigonish': 0.015,
	'argyle': 'yarmouth-county',
	'arichat': 'richmond-county',
	'aylesford': 'kings-county',
	'baddeck': 'victoria-county',
	'bass-river': 'colchester-county',
	'bear-river': 'annapolis-county',
	'berwick': 0.015,
	'blandford': 'lunenburg-county',
	'boisdale': 'cape-breton',
	'boularderie': 'victoria-county',
	'bridgetown': 'annapolis-county',
	'bridgewater': 'lunenburg-county',
	'brookfield': 'colchester-county',
	'canning': 'kings-county',
	'canso': 0.005,
	'caribou': 'pictou-county',
	'carleton': 'yarmouth-county',
	'chelsea': 'lunenburg-district',
	'chester': 'lunenburg-county',
	'cheticamp': 'inverness-county',
	'cheverie': 'west-hants-district',
	'clarks-harbour': 0.01,
	'clarksville': 'east-hants-district',
	'collingwood-corner': 'cumberland-county',
	'dartmouth': 'halifax',
	'debert': 'colchester-county',
	'digby': 0.0125,
	'dingwall': 'victoria-county',
	'dundee': 'richmond-county',
	'east-bay': 'cape-breton',
	'ecum-secum': 'guysborough-county',
	'elmsdale': 'east-hants-district',
	'freeport': 'digby-district',
	'french-village': 'halifax',
	'gabarus': 'cape-breton',
	'glace-bay': 'cape-breton',
	'goldboro': 'guysborough-county',
	'goshen': 'guysborough-county',
	'grand-etang': 'inverness-county',
	'grand-lake': 'halifax',
	'grand-narrows': 'cape-breton',
	'great-village': 'colchester-county',
	'greenwood': 'kings-county',
	'guysborough': 'guysborough-county',
	'hantsport': 0,
	'heatherton': 'antigonish-county',
	'hopewell': 'pictou-county',
	'hubbards': 'halifax',
	'ingonish': 'victoria-county',
	'inverness': 'inverness-county',
	'kennetcook': 'east-hants-district',
	'kentville': 0,
	'kenzieville': 'pictou-county',
	'ketch-harbour': 'halifax',
	'kingston': 'kings-county',
	'lardoise': 'richmond-county',
	'lahave': 'lunenburg-county',
	'lake-charlotte': 'halifax',
	'larrys-river': 'guysborough-county',
	'lawrencetown': 'halifax',
	'liverpool': 'queens',
	'lockeport': 0.015,
	'louisbourg': 'cape-breton',
	'louisdale': 'richmond-county',
	'lunenburg': 'lunenburg-county',
	'mabou': 'inverness-county',
	'maccan': 'cumberland-county',
	'mahone-bay': 'lunenburg-county',
	'maitland': 'east-hants-district',
	'margaree-forks': 'inverness-county',
	'marion-bridge': 'cape-breton',
	'melrose': 'st-marys-district',
	'merigomish': 'pictou-county',
	'meteghan': 'digby-county',
	'middleton': 'annapolis-county',
	'monastery': 'antigonish-county',
	'mount-uniacke': 'east-hants-district',
	'mulgrave': 'guysborough-county',
	'musquodoboit-harbour': 'halifax',
	'new-germany': 'lunenburg-county',
	'new-glasgow': 'pictou-county',
	'new-ross': 'lunenbury-county',
	'new-waterford': 'cape-breton',
	'noel': 'east-hants-district',
	'north-sydney': 'cape-breton',
	'oxford': 0,
	'parrsboro': 0.01,
	'peggys-cove': 'halifax',
	'pictou': 'pictou-county',
	'port-bickerton': 'st-marys-district',
	'port-dufferin': 'halifax',
	'port-greville': 'cumberland-county',
	'port-hawkesbury': 0.005,
	'port-hood': 'inverness-county',
	'port-la-tour': 'barrington-district',
	'port-maitland': 'yarmouth-county',
	'port-morien': 'cape-breton',
	'port-mouton': 'queens',
	'pubnico': 'yarmouth-county',
	'pugwash': 'cumberland-county',
	'queensport': 'guysborough-county',
	'river-hebert': 'cumberland-county',
	'river-john': 'pictou-county',
	'riverport': 'lunenburg-county',
	'salt-spings': 'pictou-county',
	'saulnierville': 'digby-county',
	'shelburne': 0.01,
	'sherbrooke': 'guysborough-county',
	'shubenacadie': 'east-hants-district',
	'southampton': 'cumberland-county',
	'springfield': 'annapolis-county',
	'springhill': 0.005,
	'st-margaret-village': 'cape-breton',
	'st-peters': 'richmond-county',
	'stellarton': 'pictou-county',
	'stewiacke': 'colchester-county',
	'sydney': 'cape-breton',
	'tangier': 'halifax',
	'tatamagouche': 'colchester-county',
	'thorburne': 'pictou-county',
	'trenton': 'pictou-county',
	'truro': 'colchester-county',
	'tusket': 'yarmouth-county',
	'wallace': 'cumberland-county',
	'walton': 'east-hants-district',
	'waverly': 'halifax',
	'wedgeport': 'yarmouth-county',
	'westville': 'pictou-county',
	'weymouth': 'digby-county',
	'whycocomagh': 'inverness-county',
	'windsor': 0.015,
	'wolfville': 0.015,
	'yarmouth': 'yarmouth-county'
};

function ns_ltt(home_price, city) {
	while (ns_ltt_table[city]) {
		var val = ns_ltt_table[city];
		if (typeof(val) == 'number') {
			return val * home_price;
		} else if (typeof(val) == 'string') {
			city = val;
		} else {
			break;
		}
	}
	return 0;
}

function on_rebate(home_price, fthb) {
	if (on_ltt(home_price) > 2000)
		return 2000;

	else
		return on_ltt(home_price);
}

function to_rebate(home_price) {
	if (to_ltt(home_price) > 3725)
		return 3725;

	else
		return to_ltt(home_price);
}


//Nova Scotia
// Ontario
//Qubec
//Saskatchewan - Title insuarnce fees




//Extra

Nuvaut





