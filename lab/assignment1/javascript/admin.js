/**
 * Created by: Sweta Kumari, for COSC-212 assignment 18-08-2018.
 */


/**
 * Module pattern for reading xml files into admin.html page.
 */
var Admin = (function () {
    "use strict" ;

    // Public interface
    var pub = {};
    var target;

    /**
     * Inserts the data from the roomBooking.xml into the main
     * section of admin.html.
     */
    function showRooms() {
        target = $(this).parent().find("#booking")[0];
        var xmlSource = 'xml_files/roomBookings.xml';
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
     * Parse the XML representing a room booking details.
     * Provided function to every element in the list of booking tags.
     * For each booking, extracted the booking details.
     * @param data - The XML containing the booking data.
     * @returns target - An object representing the value extracted from booking tags.
     */
    function parseRooms(data, target){
        $(data).find("booking").each(function (){
            var roomNum  = $(this).find("number")[0].textContent;
            var name = $(this).find("name")[0].textContent;
            var dayCheckIn = $(this).find("day")[0].textContent;
            var monthCheckIn = $(this).find("month")[0].textContent;
            var yearCheckIn = $(this).find("year")[0].textContent;
            var dayCheckOut = $(this).find("day")[1].textContent;
            var monthCheckOut = $(this).find("month")[1].textContent;
            var yearCheckOut = $(this).find("year")[1].textContent;
            $(target).append("<div><li>Room Number: " + roomNum + "<br>" + "Booked By: " + name + "</strong><br />"
                + "<strong>From: " + dayCheckIn + "/" + monthCheckIn + "/" + yearCheckIn + "<strong> To: " +
                dayCheckOut + "/" + monthCheckOut + "/" + yearCheckOut + "</li></div>");
        });
        console.log(target);
        return target;
    }

    pub.setup = function() {
        $("#booking").append(showRooms);
    };
// Expose the public interface
    return pub;
}());

$(document).ready(Admin.setup);
