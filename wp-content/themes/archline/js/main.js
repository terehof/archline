/**
 * Created by Yegor on 09.04.2016.
 */

$(document).ready(function() {

    if ( $('#map_canvas').length > 0 ) {
        //$(window).load(function () {
            initMap();
        //});
    }

    /* menu animate*/

    $('.menu-button').click(function () {
        $('.menu').toggleClass('open');
        $(this).toggleClass('closed');
    });

    /*END*/

    $('a.active').next('p').animate({
        width: '100%'
    },1000);

    /*svg positioning*/

    var $svg = $('#svg');
    svgPosition();
    function svgPosition() {
        var bodyHeight = $('div.main').height(),
            bodyWidth  = $('div.main').width(),
            svgHeight  = $svg.height(),
            svgWidth   = $svg.width();
        $svg.css({
            height : '',
            width  : '',
            'margin-top' : -(svgHeight/2)+'px',
            'margin-left' : -(svgWidth/2)+'px'
        });
    }

    $(window).resize(svgPosition);

    /*END*/


    /*scroll to top*/

//Обработка нажатия на кнопку "Вверх"
    $("#top").click(function(){
//Необходимо прокрутить в начало страницы
        var curPos=$(document).scrollTop();
        var scrollTime=curPos/3;
        $("body,html").animate({"scrollTop":0},scrollTime);
    });

    $('.anchor').click(function() {
        var href = $(this).attr('href');
        var top  = $(href).offset().top;

        $('html, body').animate({
            scrollTop : top+'px'
        }, 1000);
    })


    /*END*/


    /*Включение анимации, когда проскроллили страницу до этого момента*/

    var target = $('.theses');
    var targetPos = target.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - winHeight;
    var animation_played = false;
    if(targetPos > winHeight){
        $(document).scroll(function(){
            if(animation_played) {
                return false;
            }
            var winScrollTop = $(this).scrollTop();
            if(winScrollTop > scrollToElem){
                animation_played = true;
                var time = 0;
                $('.theses-li').each(function(){
                    var $this = $(this);
                    time += 500;
                    setTimeout(function(t) {
                        $this.addClass('animated');
                    }, time);
                });
            }
        });
    }else{
        animation_played = true;
        var time = 0;
        $('.theses-li').each(function(){
            var $this = $(this);
            time += 500;
            setTimeout(function(t) {
                $this.addClass('animated');
            }, time);
        });
    }

    /*END*/

});




