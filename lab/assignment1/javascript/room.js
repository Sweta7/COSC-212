/**
 * Created by: Sweta Kumari, for COSC-212 assignment 18-08-2018.
 */


/**
 * Module pattern for reading xml files into room.html page.
 */
var Rooms = (function () {
    "use strict" ;
    // Public interface
    var pub = {};
    var target;


    /**
     * Inserts the data from the hotelRooms.xml into the main
     * section of rooms.html.
     */
    function showRooms() {
        target = $(this).parent().find("#room")[0];
        var xmlSource = 'xml_files/hotelRooms.xml';
        $.ajax({
            type: "GET",
            url: xmlSource,
            cache: false,
            success: function (data) {
                if ($(target).empty()) {
                    parseRooms(data, target);
                }
            },
        });
    }


    /**
     * Parse the XML representing a room details.
     * Provided function to every element in the list of hotelRoom tags.
     * For each hotel room, extracted the room details.
     * @param data - The XML containing the hotel room data.
     * @returns target - An object representing the value extracted from hotelRoom tags.
     */
    function parseRooms(data, target){
        $(data).find("hotelRoom").each(function (){
            var roomNum = $(this).find("number")[0].textContent;
            var roomType = $(this).find("roomType")[0].textContent;
            var description = $(this).find("description")[0].textContent;
            var price = $(this).find("pricePerNight")[0].textContent;
            $(target).append("<div><p><strong>Room Number: " + roomNum + "<br>" + "Room Type: " +
                roomType + "</strong><br />" +
                description + "<br>" + "<strong>Price per Night: $" + price + "</strong></p></div>");
        });
        return target;
    }

    pub.setup = function() {
        $("#room").append(showRooms);
    };
// Expose the public interface
    return pub;
}());

$(document).ready(Rooms.setup);
