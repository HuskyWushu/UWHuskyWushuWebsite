"use strict";
(function() {
    var CAL_ID = "3218n1qbhtm3fe5gims1fgciso@group.calendar.google.com";

    // loads event data to display on Home
    (window.onload = function () {
        var event1 = document.getElementById("event1");
        var event2 = document.getElementById("event2");
        var event3 = document.getElementById("event3");
        ;
        makeAjax(updateEvents);
    });

    // This function creates an Ajax request to a given url and
    // executes a given function func with the response.
    function makeAjax(func) {
        var navigate = document.getElementById();
        if (event1 && event2 && event3) {
            event1.innerHTML = "test1";
            event2.innerHTML = "foo";
            event3.innerHTML = "bar";
        }
        var ajax = new XMLHttpRequest();
        ajax.onload = updateEvents;
        ajax.onerror = ajaxFailure;
        ajax.open("GET", "https://www.googleapis.com/calendar/v3/calendars/" + CAL_ID + "/events", true);
        ajax.send();
    }

    function updateEvents() {
        alert("yay!");
    }

    function ajaxFailure(exception) {
        alert("Error making Ajax request:" +
            "\n\nServer status:\n" + this.status + " " + this.statusText +
            "\n\nServer response text:\n" + this.responseText);
        if (exception) {
            throw exception;
        }
    }})