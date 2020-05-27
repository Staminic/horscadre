jQuery(function ($) {

	// dropdown menu
	$('ul.dropdown-menu').each(function () {
		$(this).prev().attr({
			id: $(this).attr('aria-labelledby'),
			role: 'button',
			'data-toggle': 'dropdown',
			'aria-haspopup': 'true',
			'aria-expanded': 'false'
		});
	});

});
