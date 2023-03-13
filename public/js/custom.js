
/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% Free To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US

    ========================================================  */

(function ($) {
    "use strict";
    var mainApp = {
        scrollAnimation_fun: function () {

            /*====================================
             ON SCROLL ANIMATION SCRIPTS
            ======================================*/


            window.scrollReveal = new scrollReveal();

        },
         scroll_fun: function () {

            /*====================================
                 EASING PLUGIN SCRIPTS
                ======================================*/
            $(function () {
                $('.move-me a').bind('click', function (event) { //just pass move-me in design and start scrolling
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000, 'easeInOutQuad');
                    event.preventDefault();
                });
            });

        },

         top_flex_slider_fun:function()
         {
             /*====================================
              FLEX SLIDER SCRIPTS
             ======================================*/
             $('#main-section').flexslider({
                 animation: "fade", //String: Select your animation type, "fade" or "slide"
                 slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
                 animationSpeed: 1000,           //Integer: Set the speed of animations, in milliseconds
                 startAt: 0,    //Integer: The slide that the slider should start on. Array notation (0 = first slide)

             });
         },

        custom_fun:function()
        {
            /*====================================
             WRITE YOUR   SCRIPTS  BELOW
            ======================================*/




        },

    }


    $(document).ready(function () {
        mainApp.scrollAnimation_fun();
        mainApp.scroll_fun();
        mainApp.top_flex_slider_fun();
        mainApp.custom_fun();
    });
}(jQuery));
/*
  Hover scale.
  By NeekGerd.
 */

(function(exports,$){
    var self = this;
    self.CSSvendors = ["-webkit-","-moz-", "-o-", "-ms-","-khtml-",""];

    $("#wrapper .hover").on("mouseenter",function(){
        var $el = $(this),
            $im = $el.children("img"),
            elSize = {w:($el.width()+10)*1.2,h:($el.height()+10)*1.2},
            elPos = $el.offset();

        $(this).on("mousemove",function(evt){
            var mousePos = {x:evt.clientX-elPos.left,y:evt.clientY-elPos.top},
                imSize = {w:$im.width(),h:$im.height()},
                translate = "",
                imPos = {x:$im.position().left,y:$im.position().top},
                css = {},
                newPos = {x:0,y:0};

            newPos.x = - (15 + (mousePos.x/elSize.w)*(imSize.w-elSize.w));
            newPos.y = - (15 + (mousePos.y/elSize.h)*(imSize.h-elSize.h));

            translate = "translate("+newPos.x+"px,"+newPos.y+"px)";
            css = self.prefixCSS(css,"transform",translate);
            $im.css(css);
        });
    }).on("mouseleave",function(){
        $(this).off("mousemove");
        var css = {};
        self.prefixCSS(css,"transform","");
        $(this).children("img").css(css);
    });

    self.prefixCSS = function(obj,prop,value){
        var self = this;
        obj = obj||{};
        for (var i = 0, max = self.CSSvendors.length; i < max; i += 1) {
            obj[self.CSSvendors[i] + "" + prop] = value;
        }
        return obj;
    };


})(window,jQuery);
$('.marquee').marquee();

