<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * bookRoom.php, allows customer to book a room and the booked will,
 * be added into the appropriate xml page and shown on the admin.php.
 **/
session_start();
$_SESSION['currentpage'] = $_SERVER['PHP_SELF'];
$_SESSION['guestName'] = $_POST['guestName'];
?>

<!DOCTYPE html>
<html lang="en">
<?php
$scriptList = array('./js/jquery-3.3.1.min.js', 'js/Cookies.js',
    'js/Constructors.js', './js/RoomManager.js');
include('htaccess/header.php');
?>

<body>
<header>
    <h1>Hotel COSC212</h1>
</header>
<div id="mainContent">
    <?php
    include('htaccess/nav.php');
    ?>
    <main>
        <h2>Book Your Stay</h2>
        <h3>Welcome to Hotel COSC212, please fill your details :-</h3>
        <form id="bookingForm" action="htaccess/addBooking.php" method="post">
            <fieldset>
                <legend>Your Details</legend>
                <ul>
                    <li><input id="guestName" name="guestName" type="text" placeholder="Your name"></li>
                </ul>
            </fieldset>
            <fieldset id="dates">
                <!-- Using select lists allows people to select 'unreal' dates (e.g. Feb 30) however this could be
                detected in the JS check script -->
                <legend>When would you like to stay with us?</legend>
                <ul>
                    <li>Arrive:
                        <select name="arriveDay" id="arriveDay">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="arriveMonth" id="arriveMonth">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="arriveYear" id="arriveYear">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </li>
                    <li>Leave:
                        <select name="leaveDay" id="leaveDay">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="leaveMonth" id="leaveMonth">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="leaveYear" id="leaveYear">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </li>
                </ul>
                <p id="errors"></p>
                <p> <input type="submit" id="makeBooking" value="Book Room"></p>
            </fieldset>
        </form>


        <section id="output"><!--Hotel room data will be put here by JS--></section>

        <aside id="roomType" ><!--Room details will be put here by JS--></aside>
    </main>
    <section id="pendingBookings"><!--Pending booking information (held on the cookie) will be put here by JS-->
    </section>

    <?php
    include('htaccess/footer.php');
    ?>
</div>
</body>
</html>
