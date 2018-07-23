// Polígonos das áreas da cidade
let pol_AAC;
let pol_AAC_b;
let pol_AOP_I;
let pol_AOP_II;
let pol_ARA;
let pol_ARA_b;
let pol_MACROZONA_ambiental;
let pol_MACROZONA_rural;
let area_pesquisada;

function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: { lat: -22.782946, lng: -43.431588},
		zoom: 13,
		mapTypeControl: false,
	});

	//////////////////////////////////Camada de Zoneamento

	// AAC
	var geoXmlAAC = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonAAC,
	});

	function addPolygonAAC(placemark) {
		pol_AAC = geoXmlAAC.createPolygon(placemark);
		return pol_AAC;
	}
	geoXmlAAC.parse('kml/AAC.kml');

	// AAC_b
	var geoXmlAAC_b = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonAAC_b,
	});

	function addPolygonAAC_b(placemark) {
		pol_AAC_b = geoXmlAAC_b.createPolygon(placemark);
		return pol_AAC_b;
	}
	geoXmlAAC_b.parse('kml/AAC_b.kml');

	// AOP_I
	var geoXmlAOP_I = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonAOP_I,
	});

	function addPolygonAOP_I(placemark) {
		pol_AOP_I = geoXmlAOP_I.createPolygon(placemark);
		return pol_AOP_I;
	}
	geoXmlAOP_I.parse('kml/AOP_I.kml');

	// AOP_II
	var geoXmlAOP_II = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonAOP_II,
	});

	function addPolygonAOP_II(placemark) {
		pol_AOP_II = geoXmlAOP_II.createPolygon(placemark);
		return pol_AOP_II;
	}
	geoXmlAOP_II.parse('kml/AOP_II.kml');

	// ARA
	var geoXmlARA = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonARA,
	});

	function addPolygonARA(placemark) {
		pol_ARA = geoXmlARA.createPolygon(placemark);
		return pol_ARA;
	}
	geoXmlARA.parse('kml/ARA.kml');

	// ARA_b
	var geoXmlARA_b = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonARA_b,
	});

	function addPolygonARA_b(placemark) {
		pol_ARA_b = geoXmlARA_b.createPolygon(placemark);
		return pol_ARA_b;
	}
	geoXmlARA_b.parse('kml/ARA_b.kml');

	// MACROZONA_ambiental
	var geoXmlMACROZONA_ambiental = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonMACROZONA_ambiental,
	});

	function addPolygonMACROZONA_ambiental(placemark) {
		pol_MACROZONA_ambiental = geoXmlMACROZONA_ambiental.createPolygon(placemark);
		return pol_MACROZONA_ambiental;
	}
	geoXmlMACROZONA_ambiental.parse('kml/MACROZONA_ambiental.kml');

	// MACROZONA_rural
	var geoXmlMACROZONA_rural = new geoXML3.parser({
		map: map,
		zoom: false,
		createPolygon: addPolygonMACROZONA_rural,
	});

	function addPolygonMACROZONA_rural(placemark) {
		pol_MACROZONA_rural = geoXmlMACROZONA_rural.createPolygon(placemark);
		return pol_MACROZONA_rural;
	}
	geoXmlMACROZONA_rural.parse('kml/MACROZONA_rural.kml');

	var geocoder = new google.maps.Geocoder();

	var topBar = document.getElementById('top-bar');
	var input = document.getElementById('pac-input');
	//var types = document.getElementById('type-selector');
	//var strictBounds = document.getElementById('strict-bounds-selector');

	map.controls[google.maps.ControlPosition.TOP_CENTER].push(topBar);

	var autocomplete = new google.maps.places.Autocomplete(input);

	// Bind the map's bounds (viewport) property to the autocomplete object,
	// so that the autocomplete requests use the current map bounds for the
	// bounds option in the request.
	autocomplete.bindTo('bounds', map);

	// Set the data fields to return when the user selects a place.
	autocomplete.setFields(
		['address_components', 'geometry', 'icon', 'name']);

	var infowindow = new google.maps.InfoWindow();
	var infowindowContent = document.getElementById('infowindow-content');
	infowindow.setContent(infowindowContent);
	var marker = new google.maps.Marker({
		map: map,
		anchorPoint: new google.maps.Point(0, -29)
	});

	autocomplete.addListener('place_changed', function() {

		infowindow.close();
		marker.setVisible(false);
		var place = autocomplete.getPlace();

		if (!place.geometry) {
			// User entered the name of a Place that was not suggested and
			// pressed the Enter key, or the Place Details request failed.
			window.alert("Endereço não localizado: '" + place.name + "'");
			return;
		}
		// Pesquisar no objeto address_components do endereço pelo long_name "Mesquita"
		let cidade = place.address_components.find(obj => obj.long_name === "Mesquita");

		if(typeof cidade === 'undefined'){
			alert("O endereço buscado não é em Mesquita.");
			return;
		}
		
		////////////////////////////////////////////////// Preencher a variável "area_pesquisada"
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AAC)){
			area_pesquisada = "AAC";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AAC_b)){
			area_pesquisada = "AAC_b";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AOP_I)){
			area_pesquisada = "AOP_I";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AOP_II)){
			area_pesquisada = "AOP_II";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_ARA)){
			area_pesquisada = "ARA";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_ARA_b)){
			area_pesquisada = "ARA_b";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_MACROZONA_ambiental)){
			area_pesquisada = "MACROZONA_ambiental";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_MACROZONA_rural)){
			area_pesquisada = "MACROZONA_rural";
		}


		// If the place has a geometry, then present it on a map.
		if (place.geometry.viewport) {
			map.fitBounds(place.geometry.viewport);
		} else {
			map.setCenter(place.geometry.location);
			map.setZoom(17);  // Why 17? Because it looks good.
		}
		marker.setPosition(place.geometry.location);
		marker.setVisible(true);

		var address = '';
		if (place.address_components) {
			address = [
				(place.address_components[0] && place.address_components[0].short_name || ''),
				(place.address_components[1] && place.address_components[1].short_name || ''),
				(place.address_components[2] && place.address_components[2].short_name || '')
			].join(' ');
		}

		infowindowContent.children['place-icon'].src = place.icon;
		infowindowContent.children['place-name'].textContent = place.name;
		infowindowContent.children['place-address'].textContent = address;
		infowindow.open(map, marker);
	});

	
	//autocomplete.setTypes('address');
	autocomplete.setOptions({ strictBounds: false });

}
    
