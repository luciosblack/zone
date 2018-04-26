$(function(){

	$('.showBox').click(function(e){
		event.preventDefault();

		if ($('#teste').hasClass('bounceInLeft')) {
				$('#teste').removeClass('animated bounceInLeft').addClass('animated bounceOutLeft').addClass('hide');
		}

		else {
			$('#teste').removeClass('animated bounceOutLeft hide').addClass('animated bounceInLeft').show();
		}

	})

	// $('.al.TopCenter')

});