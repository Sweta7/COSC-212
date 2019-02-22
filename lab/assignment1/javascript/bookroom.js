/**
 * Created by: Sweta Kumari, for COSC-212 assignment 18-08-2018.
 */

/**
 * Module pattern for reading xml files into bookroom.html page.
 * and creating cookies from selected date, name and room value,
 */
var RoomAvailable = (function () {
    "use strict" ;
    // Public interface
    var pub = {};
    var target;
    var roomList = [];

    /**
     * Inserts the data from the roomTypes.xml into the main
     * section of book.html.
     */
    function showRooms() {
        target = $(this).parent().find("#findRoom")[0];
        var xmlSource = 'xml_files/roomTypes.xml';
        $.ajax({
            type: "GET",
            url: xmlSource,
            cache: false,
            success: function (data) {
                if ($(target).empty()) ;
                parseRooms(data);
            },
            error: function () {
                $(target).html("No room available");
            }
        });
        $("#findRoom").empty();
    }


    /**
     * Parse the XML representing a room types.
     * Provided function to every element in the list of roomType tags.
     * For each room type, extracted the some room details and appended to div(findRoom).
     * @param data - The XML containing the data from type of room.
     */

    function parseRooms(data){
        var roomId, maxGuests;
        $(data).find("roomType").each(function (){
            roomId = $(this).find("id")[0].textContent;
            maxGuests = $(this).find("maxGuests")[0].textContent;
            roomList.push({roomId: roomId, maxGuests: maxGuests});
        });
        var content = "";
        $.each(roomList, function(){
            content += ("<option value =" + this.roomId + " >" + this.roomId + " " + this.maxGuests + "</option>");
        });
        $("#searchRoom").click(function () {
            $('#findRoom').append(content);
        });
    }

    /**
     * Function to create html paragraph containing Booked name, Booked room,
     * checkInDate and checkOutDate.
     * @param itemList - list of cookies.
     * @return html which will be inserted into the bookroom.html.
     */
    function makeItemHTML(itemList) {
        $('h2').hide();
        $('#room_booking').hide();
        var html = "";
        itemList.forEach(function (item) {
            html = "<p>Thank you for choosing Arya Hotel as your destination.</p>" +
                "<h4>Your Booking - PENDING FOR:</h4>" + "<p><strong>Booking Name: </strong>" +
                item.booking_name + "<br></strong>Room type: " +
                item.findRoom + "<br>From: " + item.checkInDate +  " To: " + item.checkOutDate + "</p>" +
                "<p>To view our other rooms go to <a href=\"rooms.html\"> Our Rooms</a>.</p>";
        });
        return html;

    }

    /**
     * Function to get information from the user on clicking Book-room button,
     * and call makeItemHTML function to create an html inside pending_booking div,
     * from gathered information.
     */
    function insertPending() {
        var itemList;
        itemList = Cookie.get("pendingBooking");
        if (itemList) {
            itemList = JSON.parse(itemList);
            $("#pending_bookings").html(makeItemHTML(itemList));
        }
    }


    /**
     * Function to insert elements into Cookie after clicking button(search room),
     * and selecting the room and entering a booking name.
     * If name input type is empty, then alert a error message,
     * otherwise insert the content of selected values
     */
    function bookedContent() {
        $("#book").click(function () {
            var booking_name = $("#booking_name").val();
            var findRoom = $("#findRoom").val();
            var checkInDate = $("#checkInDate").val();
            var checkOutDate = $("#checkOutDate").val();
            var itemList, newItem;

            if (booking_name == "") {
                $("#errors").empty();
                $("#errors").append("<p>Please enter your name.</p>");
            } else {
                $("#errors").empty();
                itemList = Cookie.get("pendingBooking");
                if (itemList) {
                    itemList = JSON.parse(itemList);
                } else {
                    itemList = [];
                }
                newItem = {};
                newItem.booking_name = booking_name;
                newItem.findRoom = findRoom;
                newItem.checkInDate = checkInDate;
                newItem.checkOutDate = checkOutDate;
                itemList.push(newItem);
                Cookie.set("pendingBooking", JSON.stringify(itemList));
                insertPending();
            }
        });
    }

    pub.setup = function() {
        showRooms();
        bookedContent();
    };
// Expose the public interface
    return pub;
}());

$(document).ready(RoomAvailable.setup);
