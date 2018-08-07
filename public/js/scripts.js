let url_base = "{{ url(" / ") }}";

// Polígonos das áreas da cidade
let pol_AAC_I;
let pol_AAC_II;
let pol_AOP_I;
let pol_AOP_II;
let pol_ARA_I;
let pol_ARA_II;
let pol_MACROZONA_ambiental;
let pol_MACROZONA_rural;
let area_pesquisada;

function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: { lat: -22.782946, lng: -43.431588},
		zoom: 13,
		mapTypeControl: false,
		scrollwheel: true, //we disable de scroll over the map, it is a really annoing when you scroll through page
		styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
		

	});

	

	//////////////////////////////////Camada de Zoneamento

	// AAC_I
	var geoXmlAAC_I = new geoXML3.parser({
		map: map,
		zoom: false,
		polygonOptions: { clickable: false },
		createPolygon: addPolygonAAC,
	});

	function addPolygonAAC(placemark) {
		pol_AAC_I = geoXmlAAC_I.createPolygon(placemark);
		return pol_AAC_I;
	}
	geoXmlAAC_I.parse('kml/AAC_I.kml');

	// AAC_II
	var geoXmlAAC_II = new geoXML3.parser({
		map: map,
		zoom: false,
		polygonOptions: { clickable: false },
		createPolygon: addPolygonAAC_II,
	});

	function addPolygonAAC_II(placemark) {
		pol_AAC_II = geoXmlAAC_II.createPolygon(placemark);
		return pol_AAC_II;
	}
	geoXmlAAC_II.parse('kml/AAC_II.kml');

	// AOP_I
	var geoXmlAOP_I = new geoXML3.parser({
		map: map,
		zoom: false,
		polygonOptions: { clickable: false },
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
		polygonOptions: { clickable: false },
		createPolygon: addPolygonAOP_II,
	});

	function addPolygonAOP_II(placemark) {
		pol_AOP_II = geoXmlAOP_II.createPolygon(placemark);
		return pol_AOP_II;
	}
	geoXmlAOP_II.parse('kml/AOP_II.kml');

	// ARA_I
	var geoXmlARA_I = new geoXML3.parser({
		map: map,
		zoom: false,
		polygonOptions: { clickable: false },
		createPolygon: addPolygonARA_I,
	});

	function addPolygonARA_I(placemark) {
		pol_ARA_I = geoXmlARA_I.createPolygon(placemark);
		return pol_ARA_I;
	}
	geoXmlARA_I.parse('kml/ARA_I.kml');

	// ARA_II
	var geoXmlARA_II = new geoXML3.parser({
		map: map,
		zoom: false,
		polygonOptions: { clickable: false },
		createPolygon: addPolygonARA_II,
	});

	function addPolygonARA_II(placemark) {
		pol_ARA_II = geoXmlARA_II.createPolygon(placemark);
		return pol_ARA_II;
	}
	geoXmlARA_II.parse('kml/ARA_II.kml');

	// MACROZONA_ambiental
	var geoXmlMACROZONA_ambiental = new geoXML3.parser({
		map: map,
		zoom: false,
		polygonOptions: { clickable: false },
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
		polygonOptions: { clickable: false },
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
	var modalInfo = document.getElementById('modalInfo');
	
	//var types = document.getElementById('type-selector');
	//var strictBounds = document.getElementById('strict-bounds-selector');

	map.controls[google.maps.ControlPosition.TOP_CENTER].push(topBar);

	
	var autocomplete = new google.maps.places.Autocomplete(input, {
		componentRestrictions: { country: 'br'}
	});

	// Bind the map's bounds (viewport) property to the autocomplete object,
	// so that the autocomplete requests use the current map bounds for the
	// bounds option in the request.
	autocomplete.bindTo('bounds', map);

	// Set the data fields to return when the user selects a place.
	autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);

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
		//console.log(place);

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
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AAC_I)){
			area_pesquisada = "AAC_I";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AAC_II)){
			area_pesquisada = "AAC_II";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AOP_I)){
			area_pesquisada = "AOP_I";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_AOP_II)){
			area_pesquisada = "AOP_II";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_ARA_I)){
			area_pesquisada = "ARA_I";
		}
		if (google.maps.geometry.poly.containsLocation(place.geometry.location, pol_ARA_II)){
			area_pesquisada = "ARA_II";
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
    
