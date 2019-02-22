/**
 * Created by: Sweta Kumari, for COSC-212 assignment 20-08-2018.
 */

/**
 * Module pattern for Validation functions
 */
var SampleValidator = (function () {
    "use strict";
    // Public interface
    var pub = {};

    /**
     * Function to check the check in and check out.
     * Finds the check in and check out date for error checking,
     * when search room button is clicked.
     */
    function selectRoom() {
        var message = "";
        $('#findRoom').parent().hide();
        $("#searchRoom").click(function() {
            var checkIn = $("#checkInDate").val();
            var checkOut = $("#checkOutDate").val();
            $("#errors").empty();
            if(checkIn === "" || checkOut === "") {
                message = "<p>Please select two dates.</p>";
                $("#errors").append(message);
            }else if(checkIn > checkOut){
                message = "<p>Please select a valid check in and check out date.</p>";
                $("#errors").append(message);
            }else if (checkIn == checkOut){
                message = "<p>You can't choose same date. Please select different date.</p>";
                $("#errors").append(message);
            }  else {
                $('#findRoom').parent().show();
            }
        });
    }

    /**
     * Setup function for sample validation.
     * if error occurs, room booking will be not done,
     * and will pop error messages.
     */
    pub.setup = function () {
        selectRoom();
    };

    // Expose public interface
    return pub;
}());

$(document).ready(SampleValidator.setup);
