<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * cancelBooking.php will allows admin to cancel a booking,
 * and update roomBookings.xml page.
 **/
session_start();
$bookingsList = $_POST['bookedRoom'];
?>

<?php
//echo hello;
$xml = simplexml_load_file('../xml/roomBookings.xml');
$bookings = $xml->xpath('booking');

foreach ($bookings as $booking) {
    $number = $booking->number;
    $name = $booking->name;
    $bookingStr = $name . ' - Room ' . $number ;
    if ($bookingStr == $bookingsList) {
        unset($booking[0]);
    }
}
$xml->saveXML('../xml/roomBookings.xml');
$page = $_SESSION['lastpage'];
header("Location: $page");
?>
