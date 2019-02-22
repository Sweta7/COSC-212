<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * addRoom.php will allows admin to add a room in hotelRooms.xml page.
 * If room already present, it will notify the admin that room already exist.
 **/
session_start();
$roomNumber = $_POST['roomNumber'];
$errors = 0;
?>

<div id="main">
    <h1 class='backTrack'><a href='../admin.php'>Admin Home Page</a></h1>
    <?php if ($errors === 0) {
        $xml = simplexml_load_file('../xml/hotelRooms.xml');
        $hotelRooms = $xml->xpath('hotelRoom');
        foreach($hotelRooms as $room){
            $roomNum = $room->number;
            if($roomNum == $_POST['roomNumber']){
                echo "<p>Room " . $_POST['roomNumber'] . " already exists in bookRoom page.</p>";
                errors != 0;
                unsetSession("roomNumber");
            }
        }
        $addRoom = simplexml_load_file('../xml/hotelRooms.xml');
        $hotelRoom = $addRoom->addChild('hotelRoom');
        $hotelRoom->addChild('number', $_POST['roomNumber']);
        $hotelRoom->addChild('roomType', $_POST['roomType']);
        $hotelRoom->addChild('description', $_POST['description']);
        $hotelRoom->addChild('pricePerNight', $_POST['pricePerNight']);
        $addRoom->saveXML('../xml/hotelRooms.xml');
        echo "<h2>Successfully added following room:-</h2>";
        echo "<p><strong>Added Room Number:</strong> ".$_POST['roomNumber'].",
        <br><strong>Room Type:</strong> ".$_POST['roomType'].",
        <br><strong>Description:</strong> ".$_POST['description'].",
        <br><strong>Price per Night:</strong> ".$_POST['pricePerNight'].",</p>";
    }
    ?>
</div>
