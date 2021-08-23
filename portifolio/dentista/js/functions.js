$(function(){
	$('nav li').click(function(){
		let sec = $(this).attr('section');
		let set = $('.'+sec).offset().top - 80;
		$('html,body').animate({'scrollTop':set},850)
	})

	$('.banner a').click(function(){
		let sec = $(this).attr('section');
		let set = $('.'+sec).offset().top - 80;
		$('html,body').animate({'scrollTop':set},850)
	})
})