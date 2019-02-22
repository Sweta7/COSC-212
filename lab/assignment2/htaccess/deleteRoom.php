<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * deleteRoom.php will allows admin to delete a room,
 * and update hotelRooms.xml file.
 **/
session_start();
$roomNum = $_POST['room'];
?>

<?php
$xml = simplexml_load_file('../xml/hotelRooms.xml');
$hotelRooms = $xml->xpath('hotelRoom');
foreach($hotelRooms as $hotelRoom){
    $roomType = $hotelRoom->roomType;
    $number = $hotelRoom->number;
    $bookingStr = $number;
    if($bookingStr == $roomNum){
        unset($hotelRoom[0]);
    }

}
$xml->saveXML('../xml/hotelRooms.xml');

$xml1 = simplexml_load_file('../xml/roomBookings.xml');
$bookings = $xml1->xpath('booking');
foreach ($bookings as $booking) {
    $number1 = $booking->number;
    if($number1 == $roomNum){
        unset($booking[0]);
    }
}
$xml1->saveXML('../xml/roomBookings.xml');
$page = $_SESSION['lastpage'];
header("Location: $page");
?>
