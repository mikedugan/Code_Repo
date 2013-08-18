
//User settings
var maxSections = 5;
var sectionNamePrefix = 'page-section';


var currSection = 1;

function scrollToHash(e,sectionNumber) {
	var hash = '#' + sectionNamePrefix + sectionNumber;
	var target = $(hash);
	target = target.length ? target : $('[name=' + hash.slice(1) +']');
	// e = event;
	if (target.length) {
		e.preventDefault();
		$('html,body').stop().animate({
			scrollTop: target.offset().top
		}, 600, function() {
			location.hash = hash;
		});
	}
}

$(window).on('mousewheel', function(event, delta, deltaX, deltaY) {
	if (deltaY > 0)	{
		if (currSection > 1) { currSection--; }
		scrollToHash(event,currSection);
	}
	else {
		if (currSection < maxSections) { currSection++; }
		scrollToHash(event,currSection);

	}
	
});
