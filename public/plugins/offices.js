"use strict";
$(document).ready(function () {


    // variable to hold a map
    var map;

    // variable to hold current active InfoWindow
    var activeInfoWindow;

    // array to hold copy of markers
    var gmarkers = [];


    // ------------------------------------------------------------------------------- //
    // initialize function		
    // ------------------------------------------------------------------------------- //
    function initialize() {

        // map options - lots of options available here 
        var mapOptions = {
            zoom: 5,
            draggable: false,
            center: new google.maps.LatLng(41.95273, -97.08115),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // create map in div called map-canvas using map options defined above
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // define three Google Map LatLng objects representing geographic points
        var place0 = new google.maps.LatLng(49.95273, -97.08115);
        var place1 = new google.maps.LatLng(39.95473, -92.08215);
        var place2 = new google.maps.LatLng(37.95573, -105.08315);
        var place3 = new google.maps.LatLng(42.95773, -98.08415);


        // place markers
        fnPlaceMarkers(place0, "Office 1", 'assets/media/camp/map-pin.png');
        fnPlaceMarkers(place1, "Office 2", 'assets/media/camp/map-pin.png');
        fnPlaceMarkers(place2, "Office 3", 'assets/media/camp/map-pin.png');
        fnPlaceMarkers(place3, "Office 4", 'assets/media/camp/map-pin.png');


    }
    // ------------------------------------------------------------------------------- //
    // create markers on the map
    // ------------------------------------------------------------------------------- //
    function fnPlaceMarkers(myLocation, myCityName, myIcon) {

        var marker = new google.maps.Marker({
            position: myLocation,
            icon: myIcon
        });

        // Renders the marker on the specified map
        marker.setMap(map);

        // create an InfoWindow - for mouseover
        var infoWnd = new google.maps.InfoWindow();

        // create an InfoWindow -  for mouseclick
        var infoWnd2 = new google.maps.InfoWindow();

        // add content to your InfoWindow
        infoWnd.setContent('<div class="scrollFix">' + 'Welcome to ' + myCityName + '</div>');

        // save the info we need to use later for the side_bar
        gmarkers.push(marker);

        // adds city name on left bar
        $('.clSidebar').append("<a href='#' data-marker='" + parseInt(gmarkers.length - 1) + "'>" + myCityName + "</a><br/>");

        //$('.clSidebar').append('<p><a href="javascript:launchInfoWindow(' + (gmarkers.length-1) + ')">' + myCityName + '<\/a></p>');


        // -----------------------
        // LISTENER - ON MOUSEOVER
        // -----------------------

        // add listener on InfoWindow for mouseover event
        google.maps.event.addListener(marker, 'mouseover', function () {

            // Close active window if exists - [one might expect this to be default behaviour no?]				
            if (activeInfoWindow != null) activeInfoWindow.close();

            // Close info Window on mouseclick if already opened
            infoWnd2.close();

            // Open new InfoWindow for mouseover event
            infoWnd.open(map, marker);

            // Store new open InfoWindow in global variable
            activeInfoWindow = infoWnd;
        });

        // -----------------------
        // LISTENER - ON MOUSEOUT
        // -----------------------

        // on mouseout (moved mouse off marker) make infoWindow disappear
        google.maps.event.addListener(marker, 'mouseout', function () {
            infoWnd.close();
        });

        // --------------------------------------------
        // LISTENER - ON CLICK EVENT
        // --------------------------------------------

        // add content to InfoWindow for click event 
        infoWnd2.setContent('<div class="scrollFix">' + 'Welcome to ' + myCityName + '. <br/>Fairview Ave, El Monte, CA 91732</div>');

        // add listener on InfoWindow for click event
        google.maps.event.addListener(marker, 'click', function () {



            //Close active window if exists - [one might expect this to be default behaviour no?]				
            if (activeInfoWindow != null) activeInfoWindow.close();

            // Open InfoWindow - on click 
            infoWnd2.open(map, marker);

            // Close "mouseover" infoWindow
            infoWnd.close();

            // Store new open InfoWindow in global variable
            activeInfoWindow = infoWnd2;
        });






        // ----------------------------------------------------------------
        // LISTENER - when user clicks the name name, show the infowindow
        // ----------------------------------------------------------------			
        $(".b-goods-f").on("mouseenter", function (event) {
            // to do: for some reason when clicked, we atriggering this listener multiple times...
            var myMarker = $(this).data('marker');
            google.maps.event.trigger(gmarkers[myMarker], 'click')
        });
    }

    // ------------------------------------------------------------------------------- //
    // programmatically launch Infowindow - if we used function
    // ------------------------------------------------------------------------------- //		
    function launchInfoWindow(x) {
        google.maps.event.trigger(gmarkers[x], "click");
    }

    // ------------------------------------------------------------------------------- //
    // initial load
    // ------------------------------------------------------------------------------- //		
    google.maps.event.addDomListener(window, 'load', initialize);
});
