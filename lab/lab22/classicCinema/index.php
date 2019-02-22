<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$_SESSION['lastPage'] = $_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>

<html lang="en">
    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'javascript/carousel.js');
    include('htaccess/header.php');
    ?>
  <main>
    <p>
      Welcome to Classic Cinema, your online store for classic film.
    </p>
    <div id="carousel">
    </div>
  </main>
    <?php
    include('htaccess/footer.php');
    ?>
  </body>
</html>
