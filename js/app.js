/**
 * Created by Shrinivas on 11/18/2014.
 */

"use strict";

$(document).ready(function() {
    $('#content').load('home.html');
    $('#headerPlaceholder').height($('#navigationBar').outerHeight());
    //handle menu clicks
    $('#main-nav ul.nav li a').click(function() {
        var page = $(this).attr('href');
        $('#content').load(page + '.html');
        return false;
    });
});