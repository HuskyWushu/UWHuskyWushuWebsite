/**
 * Created by Shrinivas on 11/18/2014.
 */

"use strict";

$(document).ready(function() {
    //reveal homepage
    var contentDiv = $('#content');
    contentDiv.load('home.html');
    contentDiv.css("display", "none");
    contentDiv.fadeIn(2000);

    $('#headerPlaceholder').height($('#navigationBar').outerHeight());
    //handle menu clicks
    $('#main-nav ul.nav li a').click(function() {
        var contentDiv = $('#content');
        contentDiv.load($(this).attr('href'), function() {
            contentDiv.hide().fadeIn(500);
        });

        return false;
    });


});