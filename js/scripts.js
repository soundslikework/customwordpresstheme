$(function(){
	$('.startButton').on('click', function() {
		$.smoothScroll({
			scrollTarget: '.footer__contact'
		});
	})
	console.log("It's working");

});