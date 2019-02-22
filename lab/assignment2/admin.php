<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * admin.php  page will allow Administrative staff to add, delete,
 * edit a room and cancel a room booking.
 **/
session_start();
$_SESSION['lastpage'] = $_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>
<html lang="en">
<?php
$scriptList = array('js/jquery-3.3.1.min.js', 'js/Cookies.js',
    'js/Constructors.js', 'js/Admin.js', 'js/validation.js');
include('htaccess/header.php');
?>

<body>
<header>
    <h1>Hotel COSC212: Admin</h1>
</header>
<div id="mainContent">
    <?php
    include('htaccess/nav.php');
    ?>
    <main>
        <section id="bookings"><!-- Information about confirmed booking will be put here by JS--></section>
        <h2>Administrative Tools</h2>
        <div id="cart"></div>


        <div>
            <form id="addRooms" action="htaccess/addRoom.php" method="POST" novalidate>
                <fieldset>
                    <legend>Add Rooms:</legend>
                    <p>
                        <label for="roomNumber">Room Number:</label>
                        <input type="text" name="roomNumber" id="roomNumber" placeholder='Room Number' required>
                    </p>
                    <p>
                        <label for="roomType">Room Type: </label>
                        <select id="roomType" name="roomType" required>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Twin">Twin</option>
                            <option value="King">King</option>
                            <option value="Triple Room">Triple Room</option>
                        </select>
                    </p>
                    <p>
                        <label for="description">Description: </label>
                        <input type="text" name="description" id="description" placeholder='Room Description' required>
                    </p>
                    <p>
                        <label for="pricePerNight">Price per Night: </label>
                        <input type="text" name="pricePerNight" id="pricePerNight" placeholder='0.00' required>
                    </p>
                    <p id="errors"></p>
                    <p>
                        <input type="submit" name="addRoom" id="addRoom" value = "Add room">
                    </p>
                </fieldset>
            </form>
        </div>
        <div>
            <form id="deleteRoom" action="htaccess/deleteRoom.php" method="post">
                <fieldset>
                    <legend><span>Delete a room</span></legend>
                    <p style="color:red;">Please check the booking before
                        deleting any room, Othervise BOOKED ROOM will also be deleted.</p>
                    <p>
                        <label for="rooms">Room Number: </label>
                        <?php
                        echo "<select id='room' name='room'>";
                        $hotelRooms = simplexml_load_file('./xml/hotelRooms.xml');
                        foreach ($hotelRooms->hotelRoom as $hotelRoom) {
                            $number = $hotelRoom->number;
                            $roomType = $hotelRoom->roomType;
                            echo "<option> $number</option>";
                        }
                        echo "</select>";
                        ?>
                    </p>
                    <p>
                        <input type="submit" name="deleteRoom" id="deleteRoomSubmit" value = "Delete room">
                    </p>
                </fieldset>
            </form>
        </div>

        <div>
            <form id="cancelBookingForm" action="htaccess/cancelBooking.php" method="post">
                <fieldset >
                    <legend><span>Cancel Booking</span></legend>
                    <p>
                        <label for="bookings">Bookings: </label>
                        <?php
                        echo "<select id='bookedRoom' name='bookedRoom'>";
                        $bookings = simplexml_load_file('./xml/roomBookings.xml');
                        foreach ($bookings->booking as $booking) {
                            $name = $booking->name;
                            $number = $booking->number;
                            echo "<option> $name - Room $number</option>";
                        }
                        echo "</select>";
                        ?>
                    </p>
                    <p>
                        <input type="submit" name="cancelBooking" id="cancelBooking" value = "Cancel Booking">
                    </p>
                </fieldset>
            </form>
        </div>

        <div>
            <form id="editRoomForm" action="htaccess/editRoom.php" method="post" novalidate>
                <fieldset>
                    <legend><span>Edit Room:</span></legend>
                    <p>
                        <label for="roomNumber">Room Number: </label>
                        <?php
                        echo "<select id='roomNumber' name='roomNumber'>";
                        $hotelRooms = simplexml_load_file('./xml/hotelRooms.xml');
                        foreach ($hotelRooms->hotelRoom as $hotelRoom) {
                            $number = $hotelRoom->number;
                            echo "<option> $number</option>";
                        }
                        echo "</select>";
                        ?>
                    </p>
                    <p>
                        <label for="roomType">Room Type: </label>
                        <select id="roomType" name="roomType">
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Twin">Twin</option>
                            <option value="King">King</option>
                            <option value="Triple">Triple Room</option>
                        </select>
                    </p>
                    <p>
                        <label for="description1">Description: </label>
                        <input type="text" name="description1" id="description1" placeholder='New Room Description' required>
                    </p>
                    <p>
                        <label for="pricePerNight1">Price per Night: </label>
                        <input type="text" name="pricePerNight1" id="pricePerNight1" placeholder='New PPN 0.00' required>
                    </p>
                    <p id="errors1"></p>
                    <p>
                        <input type="submit" name="editRoom" id="editRoom" value = "Update Room">
                    </p>
                </fieldset>
                <div id="adminForm"></div>
            </form>
        </div>
    </main>

    <?php
    include('htaccess/footer.php');
    ?>
</div>
</body>
</html>
