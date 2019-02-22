<!DOCTYPE html>

<html lang="en">
    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'leaflet/leaflet.js', 'javascript/map.js');
    include('htaccess/header.php');
    $_SESSION['lastpage'] = $_SERVER['PHP_SELF'];
    ?>
  <main>
    <figure id="map">
      <!-- <img src="images/map.png" alt="map"> -->
    </figure>

    <div class="contact">
      <h3>Central</h3>
      <p>
        101 The Octagon
      </p>
      <p>
        (03) 490 1234
      </p>
    </div>
    <div class="contact">
      <h3>North</h3>
      <p>
        789 Princes St
      </p>
      <p>
        (03) 490 2468
      </p>
    </div>
    <div class="contact">
      <h3>South</h3>
      <p>
        561 Great King St
      </p>
      <p>
        (03) 490 3579
      </p>
    </div>

  </main>
    <?php
    include ('htaccess/footer.php');
    ?>
  </body>
</html>
