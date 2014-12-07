/**
 * Created by Shrinivas on 11/18/2014.
 */

"use strict"

$(document).ready(function() {
    //initial

    //handle menu clicks
    $('ul#nav li a').click(function() {
        var page = $(this).attr('href');
        $('#content').load(page + '.html');
        return false;
    });


//    document.getElementById("navBar").innerHTML =
//        "<ul id='menu'>" +
//        "<li><a href='index.html'>Home</a></li>" +
//        "<li><a href='History.html'>History</a></li>" +
//        "<li><a href='Events.html'>Events</a></li>" +
//        "<li><a href='Gallery.html'>Gallery</a></li>" +
//        "</ul>";
////document.getElementById("trademark").innerHTML =
////    ""
});