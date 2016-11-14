$(function(){
	
	var wheight = $(window).height();
	
	$(window).scroll(function(){
		if($(document).scrollTop() > wheight * .65){
			$('.navbar').addClass('shrink');
		} else {
			$('.navbar').removeClass('shrink');
		}
	});
});