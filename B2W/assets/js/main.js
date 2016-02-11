$(function () {
	// Cache window object
	var $window = $(window);

	//parallax background  effect
	$('section[data-type="background"]').each(function () {
		var $bgobj = $(this); // assiging the object

		$(window).scroll(function () {
			//scroll the background at a var speed
			//the yPos is a negative value because we scrolling it up

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			//put together our final background position
			var coords = '50% ' + yPos + 'px';

			//move the background
			$bgobj.css({backgroundPosition: coords});
		});// end window scroll
	});
});
