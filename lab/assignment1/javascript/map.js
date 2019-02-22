/**
 * Created by: Sweta Kumari, for COSC-212 assignment 18-08-2018.
 */

/**
 * Module pattern for interactive map.
 */
var Map = (function () {
    "use strict" ;
    var markerLocation, markerBounds, aryaMarker, fusionMarker,
        indianMarker, goldenMarker, museumMarker, beachMarker, nightMarker, map;
    var pub = {};
    var toggle = true;

    /**
     * Function to show or hide all markers related to either restaurant or attraction,
     * when clicking restaurant or attraction respectively.
     */
    function hideMarker() {
        if (this.textContent === 'Restaurants') {
            if (toggle) {
                map.removeLayer(fusionMarker);
                map.removeLayer(indianMarker);
                map.removeLayer(goldenMarker);
                toggle = false;
            } else {
                map.addLayer(fusionMarker);
                map.addLayer(indianMarker);
                map.addLayer(goldenMarker);
                toggle = true;
            }
        }
        if (this.textContent === 'Attractions') {
            if (toggle) {
                map.removeLayer(museumMarker);
                map.removeLayer(beachMarker);
                map.removeLayer(nightMarker);
                toggle = false;
            } else {
                map.addLayer(museumMarker);
                map.addLayer(beachMarker);
                map.addLayer(nightMarker);
                toggle = true;
            }
        }
    }


    /**
     * Function to centre the map when clicking specific location name.
     */
    function centreMap(e) {
        if (this.textContent === 'Arya Hotel') {
            markerLocation = [hotelMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'Fusion Restaurant') {
            markerLocation = [fusionMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'Indian Restaurant') {
            markerLocation = [indianMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'Golden Restaurant') {
            markerLocation = [goldenMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'Museum') {
            markerLocation = [museumMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'Night Market') {
            markerLocation = [nightMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === 'Beach') {
            markerLocation = [beachMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
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

        aryaMarker = L.marker([-45.873937, 170.50311]).addTo(map);
        aryaMarker.bindPopup("<b>Grand Hotel</b>" +
            "<p>A place to relax</p>" +
            '<a href=" + "https://www.cs.otago.ac.nz"> Book a Room  </a>');

        fusionMarker = L.marker([-45.87445, 170.498476]).addTo(map);
        fusionMarker.bindPopup("<b>Fusion Restaurant</b>" +
            "<p>Specialised in fusion of taste from all over the country</p>" +
            '<a href=" + "http://www.cs.otago.ac.nz"> Website </a>');

        indianMarker = L.marker([-45.833238, 170.560645]).addTo(map);
        indianMarker.bindPopup("<b>Indian Restaurant</b>" +
            "<p>Specialised in variety of Indian cuisine</p>" +
            '<a href=" + "https://www.cs.otago.ac.nz"> Website </a>');

        goldenMarker = L.marker([-45.889232, 170.496225]).addTo(map);
        goldenMarker.bindPopup("<b>Golden Restaurant</b>" +
            "<p>Specialising in all sort of foods</p>" +
            '<a href=" + "https://www.cs.otago.ac.nz"> Website </a>');

        museumMarker = L.marker([-45.89553, 170.522621]).addTo(map);
        museumMarker.bindPopup("<b>World Famous Museum</b>" +
            "<p>Specialised is in fusion of taste from all over the country</p>" +
            '<a href=" + "http://www.cs.otago.ac.nz"> Website </a>');

        nightMarker = L.marker([-45.863238, 170.510645]).addTo(map);
        nightMarker.bindPopup("<b>Night Market</b>" +
            "<p>Specialised in variety of Indian cuisine</p>" +
            '<a href=" + "https://www.cs.otago.ac.nz"> Website </a>');

        beachMarker = L.marker([-45.880116, 170.517577]).addTo(map);
        beachMarker.bindPopup("<b>Beach</b>" +
            "<p>Specialising in all sort of foods</p>" +
            '<a href=" + "https://www.cs.otago.ac.nz"> Website </a>');

        // To hide/show marker related to Restaurants or attractions.
        $("h2").css({cursor: "pointer"});
        $("h2").click(hideMarker);

        // To marker in center of map on click.
        $("h3").css({cursor: "pointer"});
        $("h3").click(centreMap);
    };

// Expose the public interface
    return pub;
}());

$(document).ready(Map.setup);
