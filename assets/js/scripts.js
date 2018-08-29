$(function() {
	Prizes.init();
});

var Prizes = (function() {
	'use strict';

	var $prizes;
	var throttled;

	function init()
	{
		throttled = _.throttle(animate_column, 100);
		$prizes = $('.mod--prizes .column');

		$(window).on('scroll', throttled);
	}

	function animate_column(el)
	{
		$prizes.each(function(index, el) {
			if (isScrolledIntoView(el)) {
				$(el).find('path').addClass('animated');
			}
		});
	}

	return {
		init:init
	};
}());



function isScrolledIntoView(elem)
{
	var docViewTop = $(window).scrollTop();
	var docViewBottom = docViewTop + $(window).height();
	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + $(elem).height();

	return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function resizeGridItem(item){
	grid = document.getElementsByClassName('grid')[0];
	rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
	rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
	rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
	item.style.gridRowEnd = "span "+rowSpan;
}

function resizeAllGridItems(){
	allItems = document.getElementsByClassName("item");
	for(x=0;x<allItems.length;x++){
		resizeGridItem(allItems[x]);
	}
}

function resizeInstance(instance){
	item = instance.elements[0];
	resizeGridItem(item);
}

window.onload = resizeAllGridItems();
window.addEventListener("resize", resizeAllGridItems);

allItems = document.getElementsByClassName("item");
for(x=0;x<allItems.length;x++){
	imagesLoaded( allItems[x], resizeInstance);
}