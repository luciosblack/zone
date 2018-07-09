function initMap() {
   console.log("entrou initMap");
   var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: { lat: -22.782946, lng: -43.431588 }
   });
   var geocoder = new google.maps.Geocoder();

   document.getElementById('submit').addEventListener('click', function () {
      geocodeAddress(geocoder, map);
   });
}

function geocodeAddress(geocoder, resultsMap) {
   console.log("entrou geocodeAddress");
   var address = document.getElementById('address').value;
   geocoder.geocode({ 'address': address }, function (results, status) {
      if (status === 'OK') {
         resultsMap.setZoom(18);
         resultsMap.setCenter(results[0].geometry.location);
         var marker = new google.maps.Marker({
            map: resultsMap,
            position: results[0].geometry.location
         });
      } else {
         alert('Não encontramos esse endereço: ' + status);
         console.log("Não encontramos esse endereço no geocodeAddress");
      }
   });
}


$(document).ready(function() {
   // demo.checkFullPageBackgroundImage();

   setTimeout(function() {
     // after 1000 ms we add the class animated to the login/register card
     $('.card').removeClass('card-hidden');
   }, 700);

   //initGoogleMaps();
   initMap();

   var myLatlng = new google.maps.LatLng(-22.782946,-43.431588);
   var mapOptions = {
      zoom: 13,
      center: myLatlng,
      scrollwheel: true, //we disable de scroll over the map, it is a really annoing when you scroll through page
      styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]
   }
   var map = new google.maps.Map(document.getElementById("map"), mapOptions);
   
   //camada limite do municipio
   //var geoXmlLimites = new geoXML3.parser({map: map, zoom: false});
   //geoXmlLimites.parse('kml/mesquita_limites.kml');

   //camada de zoneamento
   var geoXmlAAC = new geoXML3.parser({map: map, zoom: false});
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

   document.getElementById('submit').addEventListener('click', function () {
      geocodeAddress(geocoder, map);
   });

});
   
	