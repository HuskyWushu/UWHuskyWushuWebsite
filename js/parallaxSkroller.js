/**
* Created by Ivy on 12/16/2014.
*/

"Use Strict"

$(document).ready(function($) {
    $('#head').load('header.html');
    var s = skrollr.init({
        forceHeight: false,
        smoothScrolling: false,
        mobileDeceleration: 0.004
    });

    $(window).scroll(function() {
        s.refresh();
    });
});