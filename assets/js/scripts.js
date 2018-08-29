$(function() {
	var throttled = _.throttle(animate_column, 100);

	$('.mod--prizes .column').each(function(index, el) {
		$(window).on('scroll', function() {
			throttled(el);
		});
	});
});

function animate_column(el)
{
	if (isScrolledIntoView(el)) {
		$(el).addClass('animated');
		console.log(el, ' :', isScrolledIntoView(el));
	} else {
		$(el).removeClass('animated');
	}
}

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