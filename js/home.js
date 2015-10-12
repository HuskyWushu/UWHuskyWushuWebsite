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


        var ajax = new XMLHttpRequest();
        ajax.onload = updateEvents;
        ajax.onerror = ajaxFailure;
        var startTime =  getCurrentTime();
        // reference https://developers.google.com/google-apps/calendar/v3/reference/events/list
        var url = CAL_API + CAL_ID + "events?maxResults=3&" +
        "orderBy=startTime&singleEvents=true&timeMin=" + encodeURIComponent(startTime) +"&key=" + API_KEY;
        ajax.open("GET",url, true);
        ajax.send();
    }

    // Returns the current time. in YYYY-MM-DDTHH:MM:SS-08:00 format
    // Used to set the current date as the lower bound for events to return
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

    //Displays up to 3 events on index.html if they are on the google calendar
    function updateEvents() {
        var events = JSON.parse(this.responseText);
        for (var i = 0; i < 2 && events.items[i]; i++) {
            var eventTime = events.items[i].start.dateTime.substring(0, 10);
            document.getElementById("event" + i).innerHTML = events.items[i].summary + " : " + eventTimeString(eventTime);
        }
    }
    //Converts YYYY-MM-DD into Jan 01, 2015 format
    function eventTimeString(eventTime) {
        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var year = eventTime.substring(0,4);
        var month = eventTime.substring(5,7);
        var day = eventTime.substring(8,10);

        month = months[parseInt(month) - 1];
        return month + " " + day + ", " + year;
    }

    //Displays Error messages for AJAX
    function ajaxFailure(exception) {
        alert("Error making Ajax request:" +
            "\n\nServer status:\n" + this.status + " " + this.statusText +
            "\n\nServer response text:\n" + this.responseText);
        if (exception) {
            throw exception;
        }
    }
