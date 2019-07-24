$(function() {
	SVGAnimations.init();
	GridItems.init();
	SectionAnimations.init();
	PXParallax.init();
	PXHeader.init();
	PXModals.init();
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


var SectionAnimations = (function() {
	'use strict';

	var $sections;
	var throttled;

	function init()
	{
		if ($('.animate').length === 0) { return; }

		throttled = _.throttle(animate_sections, 100);
		$sections = $('.animate');

		throttled();
		$(window).on('scroll', throttled);
	}

	function animate_sections(el)
	{
		$sections.each(function(index, el) {
			if (isScrolledIntoView(el)) {
				$(el).addClass('animated').removeClass('animate');
			}
		});
	}

	function isScrolledIntoView(elem)
	{
		var docViewTop = $(window).scrollTop();
		var elemTop = $(elem).offset().top - docViewTop;
		var trigger = $(window).height() * 0.75;

		return (elemTop < trigger);
	}

	return {
		init:init
	};
}());


var PXParallax = (function() {
	'use strict';

	var $win,
		$parallax_el,
		distanceScrolled,
		speed,
		max_offset,
		ticking,
		$bgImage;

	function init() {

		$win = $(window);
		$parallax_el = $('.parallax');
		distanceScrolled = 0;
		ticking = false;
		$bgImage = $('.mod-header--bg .background');

		events();
	}

	function events() {

		setTimeout(function(){
			update();
		}, 0);

		$(window).on('scroll', onScroll);
	}

	function update() {

		ticking = false;

		if(distanceScrolled > $win.height() * 2 ) {
			if( !$bgImage.hasClass('hide') ){
				$bgImage.addClass('hide');
			}
		} else {
			if( $bgImage.hasClass('hide') ){
				$bgImage.removeClass('hide');
			}
		}

		// $parallax_el.each(function(){
		//
		// 	var $t = $(this),
		// 		dist = distanceScrolled;
		//
		// 	$t.css({
		// 		'-webkit-transform' : 'translate3d(0, '+dist+'px, 0)',
		// 		transform : 'translate3d(0, '+dist+'px, 0)'
		// 	});
		//
		// });

	}

	function onScroll() {
	    distanceScrolled = window.scrollY;
	    requestTick();
	}

	function requestTick() {
	    if(!ticking) {
	        requestAnimationFrame(update);
	    }
	    ticking = true;
	}

	return {
		init:init
	};
}());

var PXHeader = (function() {
	'use strict';

	var $menu,
		$menuButton;

	function init() {

		$menu = $('.global-nav'),
		$menuButton = $('.mobile-menu-button');

		events();
	}

	function events() {

		$menuButton.click(function(){
			if($menu.hasClass('open')){
				$menu.add($menuButton).removeClass('open');
			} else {
				$menu.add($menuButton).addClass('open');
			}
		});

	}

	return {
		init:init
	};
}());


var PXModals = (function() {
	'use strict';

	var modal_btn_selector;

	function init() {

		modal_btn_selector = '.menu a[href^="#"], [data-modal]';

		events();
	}

	function events() {

		$('body').on('click touchstart', modal_btn_selector, function(e) {

			var $t = $(this),
				modalID = $t.data('modal') ? $t.data('modal').replace('#', '') : $t.attr('href').replace('#', '');

			if($('#'+modalID).hasClass('modal')){
				e.preventDefault();

				if ($t.data('modal-video').length) {
					openModal(modalID, $t.data('modal-video'));
				} else {
					openModal(modalID);
				}
			}
		});

		$('body').on('click', '.modal__close', function(){
			closeModal();
		});

		$('body').on('click', '.modal', function(e){
			if ($(e.target).closest('.modal__content').length === 0) {
				closeModal();
		    }
		});

		if(window.location.hash) {
			var hash = window.location.hash;

			if ( $(hash+'.modal').length ) {
				openModal( hash.replace('#', '') );
			}
		}

	}

	function openModal(modalID, videoIframe){

		if (videoIframe) {
			$('#'+modalID).find('.modal-video').html(videoIframe);
		}

		$('body').add( $('#'+modalID) ).addClass('modal--active');
		history.replaceState({}, "", window.location.pathname+'#'+modalID );
	}

	function closeModal(){
		$('.modal--active .modal-video').html();
		$('.modal--active').removeClass('modal--active');
		history.replaceState({}, "", window.location.pathname );
	}

	return {
		init:init,
		openModal: openModal,
		closeModal: closeModal
	};
}());
