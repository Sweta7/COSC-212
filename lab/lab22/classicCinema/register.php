<?php
session_start();
if((isset($_SESSION['username']))){
    header("location:". "index.php");
    exit();
}
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['lastPage'] = $_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    $scriptList = array("javascript/jquery-3.1.0.min.js");
    include("htaccess/header.php");
    include("htaccess/login.php");
    ?>
    <?php
    function sessionVariable($value){
        if (isset($_SESSION[$value])){
            $newValue = $_SESSION[$value];
            echo "value='$newValue'";
        }
    }
    ?>

  <body>
    <div id="main">
        <?php
        $formOk = false;
        if (isset($_POST['submit'])) {
            $formOk = true;
            $username = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);
            $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);

            if ($username === "") {
                $formOk = false;
                echo "<p>Please provide a username</p>";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $formOk = false;
                echo "<p>Please enter a valid email</p>";
            }
            if ($password === "" || strlen($password) <= 8 || preg_match('/+[a-z]+[0-9]+/', $password)){
                $formOk = false;
                echo "<p>Password must contains minimum of 8 characters and a number </p>";
            }
            if ($confirmPassword != $password) {
                $formOk = false;
                echo "<p>passwords does not match</p>";
            }

            if ($formOk) {
                $query = "SELECT * FROM Users WHERE username = '$username'";
                $result = $conn->query($query);
                if ($result->num_rows === 0) {
                    $query = "INSERT INTO Users (username, password, email, role) VALUES ('$username', SHA('$password'), '$email', 'user')";
                    $conn->query($query);
                    if ($conn->error) {
                        echo "<p>Something went wrong2</p>";// Something went wrong
                    }
                } else {
                    echo "<p>Problem -- username is already taken</p>";
                }
                if ($username === $query){
                    echo "<p>username taken</p>";
                }
                $result->free();
                $conn->close();
            }
        }
        ?>


        <?php
        if ($formOk){
            echo "<p>Successfully registered</p>";
            //document.getElementById("main").style.display = "none";

        }else{
          ?>

      <form id="registerForm" action="register.php" method="POST" novalidate>
        <p>
          <label for="name">User Name:</label>
          <input type ="text" name="name" id="name" required
              <?php sessionVariable('name');
              ?> >
        </p>
        <p>
          <label for="email">Email:</label>
          <input type="text" name="email" id="email" required
              <?php sessionVariable('email');
              ?> >
        </p>
        <p>
          <label for="password">Password:</label>
          <input type="password" name="password">
        </p>

        <p>
          <label for="confirmPassword">Comfirm Password:</label>
          <input type="password" name ="confirmPassword">
        </p>
        <input type="submit" name="submit">
      </form>

      <?php
        }
        ?>
    </div>

      <?php include("htaccess/footer.php"); ?>
  </body>
</html>