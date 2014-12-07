/**
 * Created by Shrinivas on 11/18/2014.
 */

"use strict";

$(document).ready(function() {
    //load header
    $('body').css('overflow','hidden');
    $('#head').load('header.html');
    $('body').hide()
    $(window).load(function(){
        $('body').css('overflow', 'auto');
        $('body').fadeIn(500);
    })

});