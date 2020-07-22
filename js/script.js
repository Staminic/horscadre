jQuery(function ($) {

	// dropdown menu
	$('ul.dropdown-menu').each(function () {
		$(this).prev().attr({
			id: $(this).attr('aria-labelledby'),
			role: 'button',
			'data-toggle': 'dropdown',
			'data-display': 'static',
			'aria-haspopup': 'true',
			'aria-expanded': 'false'
		});
	});

	$('.subnav > a').removeClass('dropdown-item');
});