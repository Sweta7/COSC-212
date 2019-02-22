/**
 * @desc A closure that checks validation of admin page
 * @author Sweta Kumari
 * @created September 2018
 */
/**
 * Module pattern for Validation functions
 */
var CheckoutValidation = (function () {
    "use strict";
    var pub;
    // Public interface
    pub = {};


    /**
     * Check to see if a string is empty.
     *
     * Leading and trailing whitespace are ignored.
     * @param textValue The string to check.
     * @return {boolean} True if textValue is not just whitespace, false otherwise.
     */
    function checkNotEmpty(textValue) {
        return textValue.trim().length > 0;
    }

    /**
     * Check to see if a string contains just digits.
     *
     * Note that an empty string is not considered to be 'digits'.
     * @param textValue The string to check.
     * @return {boolean} True if textValue contains only the characters 0-9, false otherwise.
     */
    function checkDigits(textValue) {
        var pattern = /^[0-9]+$/;
        return pattern.test(textValue);
    }

    /**
     * Check to see if a string's length is in a given range.
     *
     *
     * This checks to see if the length of a string lies within [minLength, maxLength].
     * If no maxLength is given, it checks to see if the string's length is exactly minLength.
     * @param textValue The string to check.
     * @param minLength The minimum acceptable length
     * @param maxLength [optional] The maximum acceptable length
     * @return {boolean} True if textValue is an acceptable length, false otherwise.
     */
    function checkLength(textValue, minLength, maxLength) {
        var length = textValue.length;
        if (maxLength === undefined) {
            maxLength = minLength;
        }
        return (length >= minLength && length <= maxLength);
    }


    /**
     * Check to see if the  room Number appears valid.
     *
     * The only check here is that the roo Number must not be blank.
     *
     * @param room Number The string to check
     * @param messages Array of error messages (may be modified)
     * @return True if the room Number looks OK, false otherwise
     */
    function checkroomNumber(roomNumber, messages) {
        if (!checkNotEmpty(roomNumber)) {
            messages.push("You must enter a room Number");
        }
    }


    /**
     * Check to see if the description appears valid.
     *
     * The only check here is that the description must not be blank.
     *
     * @param description The string to check
     * @param messages Array of error messages (may be modified)
     * @return True if the description looks OK, false otherwise
     */
    function checkDescription(description, messages) {
        if (!checkNotEmpty(description)) {
            messages.push("You must enter description about room");
        }
    }


    /**
     * Check to see if the pricePerNight appears valid.
     *
     * The only check here is that the delivery name must not be blank.
     *
     * @param pricePerNight The string to check
     * @param messages Array of error messages (may be modified)
     * @return True if the pricePerNight looks OK, false otherwise
     */
    function checkpricePerNight(pricePerNight, messages) {
        if (!checkNotEmpty(pricePerNight)) {
            messages.push("You must enter a Price of room");
        } else if (!checkDigits(pricePerNight)){
            messages.push("You must insert a digit");
        }
    }

    /**
     * Validate the ADD form
     *
     * Check the form entries before submission
     *
     * @return {boolean} False, because server-side form handling is not implemented. Eventually will return true on success and false otherwise.
     */
    function validateAddCheckout() {
        var messages, description, roomNumber, pricePerNight, errorHTML;

        // Default assumption is that everything is good, and no messages
        messages = [];

        // description validation
        description = $("#description").val();
        checkDescription(description, messages);
        // room number validation
        roomNumber = $("#roomNumber").val();
        checkroomNumber(roomNumber, messages);
        // price per night validation
        pricePerNight = $("#pricePerNight").val();
        checkpricePerNight(pricePerNight, messages);


        if (messages.length !== 0) {
            errorHTML = "<p><strong>There were errors processing your form</strong></p>";
            errorHTML += "<ul>";
            messages.forEach(function (msg) {
                errorHTML += "<li>" + msg;
            });
            errorHTML += "</ul>";
            $("#errors").html(errorHTML);
            return false;
        } else if(messages.length === 0) {
            $("#errors").empty();
            $("#errors").html("<p>Room is successfully added</p>");
            return true;
        }
    }


    /**
     * Validate the Edit form
     *
     * Check the form entries before submission
     *
     * @return {boolean} False, because server-side form handling is not implemented. Eventually will return true on success and false otherwise.
     */
    function validateEditCheckout() {
        var messages1, description1, pricePerNight1, errorHTML1;

        // Default assumption is that everything is good, and no messages
        messages1 = [];

        // description validation
        description1 = $("#description1").val();
        checkDescription(description1, messages1);
        // price per night validation
        pricePerNight1 = $("#pricePerNight1").val();
        checkpricePerNight(pricePerNight1, messages1);


        if (messages1.length !== 0) {
            errorHTML1 = "<p><strong>There were errors processing your form</strong></p>";
            errorHTML1 += "<ul>";
            messages1.forEach(function (msg) {
                errorHTML1 += "<li>" + msg;
            });
            errorHTML1 += "</ul>";
            $("#errors1").html(errorHTML1);
            return false;
        } else if (messages1.length === 0) {
            $("#errors1").empty();
            $("#errors1").html("<p>Room is successfully edited</p>");
            return true;
        }
    }

    /**
     * Setup function for sample validation.
     *
     * Adds validation to the form on submission.
     * Note that if the validation fails (returns false) then the form is not submitted.
     */
    pub.setup = function () {
        $("#addRooms").submit(validateAddCheckout);
        $("#editRoomForm").submit(validateEditCheckout);

    };

    // Expose public interface
    return pub;
}());

// The usual onload event handling to call CheckoutValidation.setup
$(document).ready(CheckoutValidation.setup);
