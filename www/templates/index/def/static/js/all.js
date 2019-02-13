/*
* project : meces
*
* */


$(function() {

    if($('#index-banner').length>0){
        var swiper = new Swiper('#index-banner', {
            spaceBetween: 30,
            autoplay :{
                delay: 5000,
            },
            pagination :{
                el: '.swiper-pagination',
                clickable :true,
            }
        });
    }

    if($('#advertising-form').length>0){
        var swiper = new Swiper('#advertising-form', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    $(".ti").bind("click", function() {
        var b = $(this).next(".con");
        if (b.is(":visible")) {
            b.slideUp(200);
        } else {
            b.slideDown(200);
        }
    })

    if($('#index-partner').length>0){
        var swiper = new Swiper('#index-partner', {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 30,
            preventClicks : false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay:{
                delay:3000
            }
        });
    }



    if($('.header').length>0){
        $(".menu-button").click(function(){
            $('.header-menu').slideToggle(300);
            $('.mb-bg').fadeToggle(200);
        });

        $(".mb-bg").click(function(){
            $('.header-menu').slideUp(300);
            $('.mb-bg').fadeOut(200);
        });

    }

    if($('#top').length>0){
        $("#top").click(function () {
            var speed=800;//滑动的速度
            $('body,html').animate({ scrollTop: 0 }, speed);
            return false;
        });
    }

    if($('#advertisers').length>0){
        var swiper = new Swiper('#advertisers', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }



    // 窗口变化
    $(window).resize(function(){

        var ww = $(window).width();

        // DEVICE : Tablets
        if (ww>1000) {
            $(window).scroll(function() {
                if($(window).scrollTop() >= 300){ //向下滚动像素大于这个值时，即出现浮窗~
                    $('#top').fadeIn(300); //浮窗淡入的时间，越小出现的越快~
                }else{
                    $('#top').fadeOut(300); //浮窗淡出的时间，越小消失的越快~
                }
            });

            if($('.top-area').length>0){
                window.onload = function(){
                    $('.top-area').css({opacity:'1',})
                    $('.index-banner').css({opacity:'1',})
                    $('.index-advantage').css({opacity:'1',})
                }
            }


            if($('.advertising-form').length>0){
                $(window).scroll(function() {
                    if($(window).scrollTop()>=600){
                        $('.advertising-form').css({opacity: '1'});
                    }
                });
            }

            if($('.index-news').length>0){
                $(window).scroll(function() {
                    if($(window).scrollTop()>=1200){
                        $('.index-news').css({opacity: '1'});
                    }
                });
            }

            if($('.index-partner').length>0){
                $(window).scroll(function() {
                    if($(window).scrollTop()>=1900){
                        $('.index-partner').css({opacity: '1'});
                    }
                });
            }

            if($('.index-kf').length>0){
                $(window).scroll(function() {
                    if($(window).scrollTop()>=2300){
                        $('.index-kf').css({opacity: '1'});
                    }
                });
            }

        }

        if (ww>=768 && ww<=1024) {


            if($("#com-re-sw").length>0) {
                //co
                kk.params.slidesPerView = 3;
            }

        }

        // DEVICE : SmartPhone
        if (ww<768) {

            if($(".honor").length>0){
                honor.params.slidesPerView = 1;
            }

        }

        if($("#index-partner").length>0){
            //partner.update();
        }

    });

    $(window).trigger('resize');
});









