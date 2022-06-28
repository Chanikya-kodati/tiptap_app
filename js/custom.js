// JavaScript Document

$(window).scroll(function () {
	 "use strict";
	if ($(this).scrollTop() > 100) {
		$('.banner-area').addClass('small-header');
	} else {		   
		$('.banner-area').removeClass('small-header');
	}
});
