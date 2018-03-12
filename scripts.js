$( document ).ready(function() {

	$( window ).scroll(function() {
		if ($(this).scrollTop() > 75) {
			$('.heading-logo').fadeOut()
		} else {
			$('.heading-logo').fadeIn();
		}

	});

});