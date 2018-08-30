$(function() {
	SVGAnimations.init();
	GridItems.init();
});

var SVGAnimations = (function() {
	'use strict';

	var $svgs;
	var throttled;

	function init()
	{
		if ($('svg.to-animate').length === 0) { return; }

		throttled = _.throttle(animate_svg, 100);
		$svgs = $('svg.to-animate');

		$(window).on('scroll', throttled);
	}

	function animate_svg(el)
	{
		$svgs.each(function(index, el) {
			if (isScrolledIntoView(el)) {
				$(el).find('path').addClass('animated');
			}
		});
	}

	function isScrolledIntoView(elem)
	{
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();
		var elemTop = $(elem).offset().top;
		var elemBottom = elemTop + $(elem).height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	return {
		init:init
	};
}());

var GridItems = (function() {
	'use strict';

	var grid;
	var items;
	var debounced;

	function init() {
		if ($('.grid').length === 0) { return; }

		grid = document.querySelector('.grid');
		items = grid.querySelectorAll('.item');
		debounced = _.debounce(resize_all_items, 100);

		items.forEach(function(el) {
			imagesLoaded(el, resize_instance);
		});

		$(window).on('load', resize_all_items);
		$(window).on('resize', debounced);
	}

	function resize_grid_item(item)
	{
		var rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
		var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
		var rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));

		item.style.gridRowEnd = "span "+rowSpan;
	}

	function resize_all_items()
	{
		items.forEach(function(el) {
			resize_grid_item(el);
		});
	}

	function resize_instance(instance)
	{
		var item = instance.elements[0];
		resize_grid_item(item);
	}

	return {
		init:init
	};
}());