/**
 * For interactive map.
 */

var Map = (function () {
    "use strict" ;
    var headings, i, markerLocation, markerBounds, centralMarker, northMarker, southMarker,map;
    var pub = {};

    function centreMap(e) {
        console.log(this);
        if (this.textContent === 'Central') {
            markerLocation = [centralMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'North') {
            markerLocation = [northMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'South') {
            markerLocation = [southMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
    }

    function onMapClick(e) {
        alert('You clicked the map at ' + e.latlng);
    }



    //public data and function
    pub.setup = function() {
      map = L.map('map').setView([-45.875, 170.500], 15);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
      { maxZoom: 18,
        attribution: 'Map data &copy; ' +
        '<a href="http://www.openstreetmap.org/copyright">' +
        'OpenStreetMap contributors</a> CC-BY-SA'
            }).addTo(map);


      centralMarker = L.marker([-45.873937, 170.50311]).addTo(map);
      centralMarker.bindPopup("<b>Central Store</b>" +
                              "<p>Specialising in Class ic Cinema</p>" +
                             "<img src = " + "../images/Metropolis.jpg" + "/>");


      northMarker = L.marker([-45.863238, 170.510645]).addTo(map);
      northMarker.bindPopup("<b>North Store</b>" +
                        "<p>Specialising in Science Fiction and Horror</p>" +
                        "<img src = " + "../images/Plan_9_from_Outer_Space.jpg" + "/>");

      southMarker = L.marker([-45.889232, 170.496225]).addTo(map);
      southMarker.bindPopup("<b>South Store</b>" +
                             "<p>Specialising in Alfred Hitchcock</p>" +
                            "<img src = " + "../images/Vertigo.jpg" + "/>");

        map.on('click', onMapClick);

        /*headings = document.getElementsByTagName("h3");
        for (i =0; i < headings.length; i+=1){
            //headings[i].onclick = centreMap;
            headings[i].onclick = hide;
        }*/

        $("h3").click(centreMap);

        //$("h3").click(hide);

        L.circle( [-45.875, 170.500],
          { radius: 100,
            color: 'red',
            fillColor: 'red',
            fillOpacity: 0.5 } ).addTo(map);
        /*L.polygon( [ [-45.874, 170.500],
             [-45.875, 170.499],
             [-45.875, 170.501] ],
           { color: 'green',
             fillColor: 'blue',
             fillOpacity: 0.25 } ).addTo(map);*/

    };

    return pub;
    }());

    /*if (window.addEventListener) {
    window.addEventListener('load', Map.setup);
    } else if (window.attachEvent) {
    window.attachEvent('onload', Map.setup);
    } else {
    alert("Could not attach ’Map.setup’ to the ’window.onload’ event");
    }*/
$(document).ready(Map.setup);