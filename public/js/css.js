$(function(){

	$('.showHide').click(function(e){
		event.preventDefault();

		var alvo = $(this).attr("href");

		if ($(alvo).hasClass('puloEmLeft')) {
				$(alvo).addClass('puloForaLeft').removeClass('puloEmLeft');
		}

		else {
			$(alvo).addClass('puloEmLeft').removeClass('puloForaLeft hide');
		}

	})

	// $('.al.TopCenter').ready(function(){
		
	// })

});