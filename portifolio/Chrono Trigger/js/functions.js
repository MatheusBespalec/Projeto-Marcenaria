$(function(){
    //Menu
    var menu = $('.list-menu');
    $('.menu i').click(function(){
        menu.fadeIn(700);
        $('.menu i').hide();
    })

    $('.list-menu i').click(function(){
        menu.fadeOut(700);
        $('.menu i').show();
    })

    $('.list-menu li').click(function(){
        menu.fadeOut(700);
        $('.menu i').show();

        let index = $(this).index();
        $('.info > div').css('display','none');
        $('.info > div:nth-of-type('+index+')').css('display','block');

    })

    //Menu Personagens
    $('.pers .wraper-char').click(function(){
        $('.pers .wraper-char').css('background-color','transparent');
        $(this).css('background-color','#474787');
        let index = $(this).index() +1;
        $('.char .p').css('display','none');
        $('.char .p:nth-of-type('+index+')').css('display','block');

        $('.char .selec').css('display','block');
    })

    $('a.start').click(function(){
        $('.info > div').css('display','none');
        $('.efect').fadeIn(1000);
        let som = $('.som').html();
        $('.som').html('');
        setTimeout(function(){
            $('.efect').html('<video autoplay><source src="videos/start.mp4" type="video/mp4"></video>');
        },1100);

        setTimeout(function(){
            $('body').addClass('body');
            $('a.start').hide();
            $('a.play').show();
            $('.char').css('display','block');
        },2000);
        setTimeout(function(){
            $('.efect').fadeOut(1000);
            setTimeout(function(){
                $('.som').html(som);
            },1500);
        },4000);
        return false;
    })
})
