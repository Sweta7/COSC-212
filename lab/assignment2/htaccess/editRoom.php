<!-- To edit a room infomation and upadte those
   changes in the hotelRooms.xml file.-->
<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * editRoom.php will allows admin to edit the details of a room,
 * and update hotelRooms.xml file.
 **/
session_start();
$roomNum = $_POST['roomNumber'];
$errors1 = 0;
?>

<?php if ($errors1 === 0) {
    $xml = simplexml_load_file('../xml/hotelRooms.xml');
    $hotelRooms = $xml->xpath('hotelRoom');

// foreach loop to insert updated info into hotelRooms.xml file.
    foreach($hotelRooms as $room){
        $roomNumber = $room->number;
        if($roomNum == $roomNumber){
            unset($room[0]);
            $hotelRoom = $xml->addChild('hotelRoom');
            $hotelRoom->addChild('number', $_POST['roomNumber']);
            $hotelRoom->addChild('roomType', $_POST['roomType']);
            $hotelRoom->addChild('description', $_POST['description1']);
            $hotelRoom->addChild('pricePerNight', $_POST['pricePerNight1']);
            $xml->saveXML('../xml/hotelRooms.xml');
        }
    }
    //$xml->saveXML('../xml/hotelRooms.xml');
    $page = $_SESSION['lastpage'];
    header("Location: $page");
}
?>
