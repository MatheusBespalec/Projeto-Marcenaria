$(function(){
	$('nav li').click(function(){
		let sec = $(this).attr('sec');
		let set = $('.'+sec).offset().top;
		$('html,body').animate({'scrollTop':set},850)
	})

	$('.banner a').click(function(){
		let sec = $(this).attr('sec');
		let set = $('.'+sec).offset().top;
		$('html,body').animate({'scrollTop':set},850)
	})
})