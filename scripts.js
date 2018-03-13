$( document ).ready(function() {
	 $("body").children().each(function() {
        $(this).html($(this).html().replace(/&#8232;/g," "));
    });
	 
	$( window ).scroll(function() {
		if ($(this).scrollTop() > 75) {
			$('.heading-logo').fadeOut()
		} else {
			$('.heading-logo').fadeIn();
		}

	});



});