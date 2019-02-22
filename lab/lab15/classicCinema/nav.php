<nav>
    <ul>
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        if ($currentPage === 'index.php'){
            echo "<li>Home";
        }else {
            echo "<li><a href='index.php'>Home</a>";
        }
        if ($currentPage === 'classic.php'){
            echo "<li>Classics";
        }else {
            echo "<li><a href='classic.php'>Classics</a>";
        }
        if ($currentPage === 'scifi.php'){
            echo "<li>Sci Fi";
        }else {
            echo "<li><a href='scifi.php'>Sci Fi</a>";
        }
        if ($currentPage === 'hitchcock.php'){
            echo "<li>Hitchcock";
        }else {
            echo "<li><a href='hitchcock.php'>Hitchcock</a>";
        }
        if ($currentPage === 'cart.php'){
            echo "<li>Cart";
        }else {
            echo "<li><a href='cart.php'>Cart</a>";
        }
        if ($currentPage === 'contact.php'){
            echo "<li>Contact";
        }else {
            echo "<li><a href='contact.php'>Contact</a>";
        }
        ?>
    </ul>
</nav>