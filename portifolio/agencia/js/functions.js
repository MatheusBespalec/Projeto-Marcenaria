$(function(){
	//Menu Mobile
	$('header i').click(function(){
		$('nav.mobile ul').slideToggle();
	})

	$('nav a').click(function(){
		return false;
	})

	//Animate Scroll
	$('nav a').click(function(){
		let link = $(this).attr('href');
		let scroll = 0;
		if (link != 'home') 
			scroll = $('section.'+link).offset().top;
		$('html,body').animate({'scrollTop':scroll})
	})
})