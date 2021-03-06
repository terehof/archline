/**
 * Created by Yegor on 09.04.2016.
 */

$(document).ready(function() {

    function pageWidget(pages) {
      var widgetWrap = $('<div class="widget_wrap"><ul class="widget_list"></ul></div>');
      widgetWrap.prependTo("body");
      for (var i = 0; i < pages.length; i++) {
      $('<li class="widget_item"><a class="widget_link" href="' + pages[i] + '.html' + '">' + pages[i] + '</a></li>').appendTo('.widget_list');
      }
      var widgetStilization = $('<style>body {position:relative} .widget_wrap{position:absolute;top:0;left:0;z-index:9999;padding:5px 10px;background:#222;border-bottom-right-radius:10px;-webkit-transition:all .3s ease;transition:all .3s ease;-webkit-transform:translate(-100%,0);-ms-transform:translate(-100%,0);transform:translate(-100%,0)}.widget_wrap:after{content:" ";position:absolute;top:0;left:100%;width:24px;height:24px;background:#222 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAABGdBTUEAALGPC/xhBQAAAAxQTFRF////////AAAA////BQBkwgAAAAN0Uk5TxMMAjAd+zwAAACNJREFUCNdjqP///y/DfyBg+LVq1Xoo8W8/CkFYAmwA0Kg/AFcANT5fe7l4AAAAAElFTkSuQmCC) no-repeat 50% 50%;cursor:pointer}.widget_wrap:hover{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.widget_item{padding:0 0 10px}.widget_link{color:#fff;text-decoration:none;font-size:15px;}.widget_link:hover{text-decoration:underline} </style>');
      widgetStilization.prependTo(".widget_wrap");
    }
    pageWidget(['index', 'projects','project-description','about_us','contacts']);
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




