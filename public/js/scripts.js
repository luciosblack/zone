
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
 
function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: { lat: -22.782946, lng: -43.431588},
		zoom: 13,
		mapTypeControl: false,
	});

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

		// Testar se o endereço pesquisado é em Mesquita
		let cidade = place.address_components[2].long_name;
		// Se a cidade não for Mesquita, alertar ao usuário e não mostrar o PIN
		if (cidade !== "Mesquita") {
			window.alert("O endereço pesquisado não é em Mesquita.");
			return;
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

	//camada de zoneamento
	var geoXmlAAC = new geoXML3.parser({ map: map, zoom: false });
	geoXmlAAC.parse('kml/AAC.kml');

	var geoXmlAAC_b = new geoXML3.parser({ map: map, zoom: false });
	geoXmlAAC_b.parse('kml/AAC_b.kml');

	var geoXmlAOP_I = new geoXML3.parser({ map: map, zoom: false });
	geoXmlAOP_I.parse('kml/AOP_I.kml');

	var geoXmlAOP_II = new geoXML3.parser({ map: map, zoom: false });
	geoXmlAOP_II.parse('kml/AOP_II.kml');

	var geoXmlARA = new geoXML3.parser({ map: map, zoom: false });
	geoXmlARA.parse('kml/ARA.kml');

	var geoXmlARA_b = new geoXML3.parser({ map: map, zoom: false });
	geoXmlARA_b.parse('kml/ARA_b.kml');

	var geoXmlMACROZONA_ambiental = new geoXML3.parser({ map: map, zoom: false });
	geoXmlMACROZONA_ambiental.parse('kml/MACROZONA_ambiental.kml');

	var geoXmlMACROZONA_rural = new geoXML3.parser({ map: map, zoom: false });
	geoXmlMACROZONA_rural.parse('kml/MACROZONA_rural.kml');

	var geocoder = new google.maps.Geocoder();

}
    
