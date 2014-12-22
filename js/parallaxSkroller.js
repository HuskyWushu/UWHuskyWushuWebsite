/**
* Created by Ivy on 12/16/2014.
*/

"Use Strict"

$(document).ready(function($) {
    $('#head').load('header.html');

    $window = $(window);

    $('[data-type]').each(function() {
        $(this).data('speed', $(this).attr('data-speed'));
    });

    $('section').each(function() {
        var $self = $(this);
        var offsetCoords = $self.offset();
        var topOffset = offsetCoords.top;

        $(window).scroll(function(){
            if(($window.scrollTop() + $window.height()) > (topOffset) &&
                ( (topOffset + $self.height()) > $window.scrollTop() ) ) {
                var yPos = -($window.scrollTop() / $self.data('speed'));

                console.log(yPos);

                var coords = '50%'+ yPos + 'px';

                $self.css({ backgroundPosition: coords });

            }
        });
    });

    $('#navigation > ul > li').on("click", function(eventObject){
        console.log($(this).attr('href'));
        eventObject.preventDefault();

        $("body, html").animate({
            scrollTop: $($(this).attr('href')).offset().top - 80
        }, 800);
    });
});