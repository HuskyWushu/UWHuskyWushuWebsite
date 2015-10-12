"use strict";
    // loads event data to display on Home
    (window.onload = function () {
        makeAjax(updateEvents);
    });
    // This function creates an Ajax request to a given url and
    // executes a given function func with the response.
    function makeAjax(func) {
        var CAL_API = "https://www.googleapis.com/calendar/v3/calendars/";
        var CAL_ID = "3218n1qbhtm3fe5gims1fgciso@group.calendar.google.com/";
        var API_KEY = "AIzaSyC59NOWzcnm5DCri2-BF9gftvgSq_8isUc";
        var event1 = document.getElementById("event1");
        var event2 = document.getElementById("event2");
        var event3 = document.getElementById("event3");


        var ajax = new XMLHttpRequest();
        ajax.onload = updateEvents;
        ajax.onerror = ajaxFailure;
        var startTime =  getCurrentTime();
        var url = CAL_API + CAL_ID + "events?maxResults=3&" +
        "orderBy=startTime&singleEvents=true&timeMin=" + encodeURIComponent(startTime) +"&key=" + API_KEY;
        ajax.open("GET",url, true);
        ajax.send();
    }

    function getCurrentTime() {
        var currentdate = new Date();
        var currTime = currentdate.getFullYear() + "-"
            + (currentdate.getMonth()+1) + "-"
            + currentdate.getDate() + "T"
            + currentdate.getHours() + ":"
            + currentdate.getMinutes() + ":"
            + currentdate.getSeconds() + "-08:00";
        return(currTime);
    }

    function updateEvents() {
        var events = JSON.parse(this.responseText);
        for (i = 0; i < 2; i++) {
            document.getElementById("event" + i.toString()).innerHTML = events.items[i].summary + " : " + events.items[i].start.dateTime.substring(0, 10);
        }
      
    }

    function ajaxFailure(exception) {
        alert("Error making Ajax request:" +
            "\n\nServer status:\n" + this.status + " " + this.statusText +
            "\n\nServer response text:\n" + this.responseText);
        if (exception) {
            throw exception;
        }
    }
