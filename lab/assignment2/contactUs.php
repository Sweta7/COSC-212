<!DOCTYPE html>
<html lang="en">
<!--
/**
* Hotel COSC212 - An Assignment 2
* Sweta Kumari, September 2018
* contact.php, to diplay the location of the hotel,
* and some interaction nearby.
**/
-->
<?php
$scriptList = array('./js/jquery-3.3.1.min.js', './js/leaflet/leaflet.js',
    'js/Constructors.js', './js/Map.js');
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
        <div>
            <h2>Contact Hotel COSC212</h2>
            <p><strong>Hotel COSC212</strong>
                <br>
                A5 23 North
                <br>
                New Zealand
                <br>
                Phone Number +37XXXX
            <p><a href="HotelCOSC212@new.com">HotelCOSC212@new.com</a></p>
        </div>
    </main>

    <div id="map"><!--Map will be put here by Leaflet.js--></div>

    <?php
    include('htaccess/footer.php');
    ?>
</div>
</body>
</html>
