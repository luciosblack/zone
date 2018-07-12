$(function(){

	$(document).ready(function() {

    var myLatlng = new google.maps.LatLng(-22.782946,-43.431588);
        var mapOptions = {
          zoom: 12,
          center: myLatlng,
          scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
          styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]

        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        
        //camada limite do municipio
        var geoXmlLimites = new geoXML3.parser({map: map, zoom: false});
            geoXmlLimites.parse('kml/mesquita_limites.kml');

        //camada de zoneamento
        var geoXmlAAC = new geoXML3.parser({map: map, zoom: false});
            geoXmlAAC.parse('kml/mesquita_zonas.kml');
  	});

  	// Carregar página sem refresh
  	// $('#content').on(".click",".ajax",function (e) {
  	// 	e.preventDefault();
  	// 	var page = $(this).attr('href');
  	// 	$('#content').load(page);
  	// })

  	// $('.ajax').click(function(page) {
  	// 	page.preventDefault();
  	// 	var page = $(this).attr('href');
  	// 	$.ajax({
  	// 		type: 'POST',
  	// 		data: '',
  	// 		url: page,
  	// 		success: function () {
  	// 			$('#content').html(page);
  	// 		}
  	// 	});
  	// });

  	// function load_page(arquivo) {
  	// 	if(arquivo) {
  	// 		$.ajax({
  	// 			type: 'POST',
  	// 			data: arquivo,
  	// 			url: arquivo,
  	// 			success: function (data) {
  	// 				console.log("RESULTADO DA CHAMADA", data);
  	// 			}
  	// 		});
  	// 	}
  	// }

  	// $(document).ready(function() {

  	// 	$('#content').on('click', '#testeT', function(event) {
  	// 		event.preventDefault();
  			
  	// 		$.get("/termos", function(resultado){
  				
  	// 			// Remove o popup atual

  	// 			// Cria um popup novo

  	// 			// Coloca o texto na variavel resultado

  	// 		});
  	// 	})

  	// })



});