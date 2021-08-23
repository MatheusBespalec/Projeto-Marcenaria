$(function(){


    $('span').click(function(){
    	if ($(this).attr('tag')=='orc') {
    		let offSetTop = $('section.contato').offset().top;
    		$('html,body').animate({'scrollTop':offSetTop},1000);
    	}
    })

    $('.box-serv').click(function(){
    	if ($(this).attr('tag')=='orc') {
    		let offSetTop = $('section.contato').offset().top;
    		$('html,body').animate({'scrollTop':offSetTop},1000);
    	}
    })

    $('.banner a').click(function(){
    	let offSetTop = $('section.servicos').offset().top;
    	$('html,body').animate({'scrollTop':offSetTop},1000);
    })
})