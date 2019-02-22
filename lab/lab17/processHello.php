<?php
$counter = 1;
if (isset($_COOKIE['counter'])) {
    $counter = (int) $_COOKIE['counter'];
}
echo "<p> You have been here $counter time(s) recently</p>";
setcookie('counter', $counter+1, time()+3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Classic Cinema</title>
    <meta charset="utf-8">
  </head>

  <body>
    <form method="get"
          action="processHello.php">
      <input type="text" name="user">
      <input type="submit" name="submit">
    </form>
  </body>
</html>