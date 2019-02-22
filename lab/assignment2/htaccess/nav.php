<!--
* Hotel COSC212 - An Assignment 2
* Sweta Kumari, September 2018
* nav.php will make navigation on each page.
 -->
<nav>
    <ul>
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        if ($currentPage === 'index.php'){
            echo "<li>Home";
        }else {
            echo "<li><a href='index.php'>Home</a>";
        }
        if ($currentPage === 'bookRoom.php'){
            echo "<li>Book Room";
        }else {
            echo "<li><a href='bookRoom.php'>Book Room</a>";
        }
        if ($currentPage === 'contactUs.php'){
            echo "<li>Contact Us";
        }else {
            echo "<li><a href='contactUs.php'>Contact Us</a>";
        }

        if ($currentPage === 'admin.php'){
            echo "<li>Admin";
        }else {
            echo "<li><a href='admin.php'>Admin</a>";
        }
        ?>
    </ul>
</nav>
