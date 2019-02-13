$(document).ready(function () {
    var animation = function () {
        var p = $('div.banner');
        if (p.hasClass('banner_02')) {
            p.fadeTo('normal', 0.2, function () {
                p.removeClass('banner_02');
                p.addClass('banner_03');
                $('div.menu > ul > li:eq(1)').removeClass('active');
                $('div.menu > ul > li:eq(2)').addClass('active');
            });
        } else if (p.hasClass('banner_03')) {
            p.fadeTo('normal', 0.2, function () {
                p.removeClass('banner_03');
                p.addClass('banner_04');
                $('div.menu > ul > li:eq(2)').removeClass('active');
                $('div.menu > ul > li:eq(3)').addClass('active');
            });
        } else if (p.hasClass('banner_04')) {
            p.fadeTo('normal', 0.2, function () {
                p.removeClass('banner_04');
                p.addClass('banner_05');
                $('div.menu > ul > li:eq(3)').removeClass('active');
                $('div.menu > ul > li:eq(4)').addClass('active');
            });
        } else if (p.hasClass('banner_05')) {
            p.fadeTo('normal', 0.2, function () {
                p.removeClass('banner_05');
                $('div.menu > ul > li:eq(4)').removeClass('active');
                $('div.menu > ul > li:eq(0)').addClass('active');
            });
        } else {
            p.fadeTo('normal', 0.2, function () {
                p.addClass('banner_02');
                $('div.menu > ul > li:eq(0)').removeClass('active');
                $('div.menu > ul > li:eq(1)').addClass('active');
            });
        }
        p.fadeTo('normal', 1);
    };
    var id = setInterval(animation, 5000);
    var time_id = null;
    $('div.menu > ul > li').click(function () {
        id && clearInterval(id);
        $('div.menu > ul > li').removeClass('active');
        $(this).addClass('active');
        var p = $('div.banner');
        var a = $(this).find('a:first');
        if (a.hasClass('menu_home')) {
            p.attr('class', 'banner');
        } else if (a.hasClass('menu_game')) {
            p.attr('class', 'banner banner_game');
        } else if (a.hasClass('menu_video')) {
            p.attr('class', 'banner banner_video');
        } else if (a.hasClass('menu_music')) {
            p.attr('class', 'banner banner_music');
        }
        time_id && clearTimeout(time_id);
        time_id = setTimeout(function () {
            id = setInterval(animation, 5000);
        }, 10000);
    });
});