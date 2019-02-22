<?php
/**
 * Hotel COSC212 - An Assignment 2
 * Sweta Kumari, September 2018
 * index.php, main home page of the website.
 **/
session_start();
$_SESSION['lastpage'] = $_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>
<html lang="en">
<?php
$scriptList = array('./js/jquery-3.3.1.min.js');
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
        <h2>Welcome to Hotel COSC212 </h2>
        <p>This Hotel is recently voted as the best hotel in the entire world. Enjoy our
            spectacular rooms with a view including free WiFi.
            Not to mention the great location situated in the heart of the city. Enquire now
            to make a <a href="bookRoom.php">booking</a>. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </main>
    <?php
    include('htaccess/footer.php');
    ?>
</div>
</body>
</html>
