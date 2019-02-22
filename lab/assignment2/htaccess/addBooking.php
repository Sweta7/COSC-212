<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * addBooking.php add the booked room in appropriate xml file.
 * and will display on admin page.
 **/
session_start();
$arriveDay= $_POST['arriveDay'];
$arriveMonth = $_POST['arriveMonth'];
$arriveYear = $_POST['arriveYear'];
$leaveDay = $_POST['leaveDay'];
$leaveMonth = $_POST['leaveMonth'];
$leaveyear = $_POST['leaveYear'];
?>

<?php
$addRoom= simplexml_load_file('../xml/roomBookings.xml');
if (isset($_COOKIE['hotelBooking'])){
    $bookings = json_decode($_COOKIE['hotelBooking']);
    foreach($bookings as $booking){
        $hotelRoom = $addRoom->addChild('booking');
        $hotelRoom->addChild('number', $booking->roomNum);
        $hotelRoom->addChild('name', $booking->guestName);
        $checkin = $hotelRoom->addChild('checkin');
        $checkin->addChild('day', $_POST['arriveDay']);
        $checkin->addChild('month', $_POST['arriveMonth']);
        $checkin->addChild('year', $_POST['arriveYear']);
        $checkout = $hotelRoom->addChild('checkout');
        $checkout->addChild('day', $_POST['leaveDay']);
        $checkout->addChild('month', $_POST['leaveMonth']);
        $checkout->addChild('year', $_POST['leaveYear']);
    }
    setcookie('hotelBooking', '', time()-3600, '/');
    unset($_COOKIE['hotelBooking']);
    $addRoom->saveXML('../xml/roomBookings.xml');
    $page = $_SESSION['currentpage'];
    header("Location: $page");
}
?>
