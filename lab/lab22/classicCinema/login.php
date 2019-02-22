<?php
session_start();
$_SESSION['username'] = $username;
header("location:" . $_SESSION['lastPage']);
?>


    <?php
    //$scriptList = array("javascript/jquery-3.1.0.min.js");
    include("htaccess/header.php");
    //include ("htaccess/validateFunctions.php");
    include("htaccess/login.php");
    ?>


            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $formOk = true;
                $username = $conn->real_escape_string($_POST['loginUser']);
                $password = $conn->real_escape_string($_POST['loginPassword']);
                if ($_POST['loginUser'] == "" || $_POST['loginPassword'] =="") {
                    $formOk = false;
                }

                if ($formOk) {
                    $query = "SELECT * FROM Users WHERE username = '$username' AND password = SHA('$password')";
                    $result = $conn->query($query);
                    if ($result->num_rows === 0) {
                        //echo "<p>incorrect </p>";
                        error_log("logged in");
                    } else {
                        $conn->query($query);
                        if ($conn->error) {
                            //echo "<p>Something went wrong2</p>";// Something went wrong
                        } else {
                            $_SESSION['username'] = $_POST['loginUser'];
                            $row = $result->fetch_assoc();
                            $role = $row['role'];
                            $_SESSION['role'] = $role;
                            //$_SESSION['password'] = $_POST['loginPassword'];
                        }
                    }
                    $conn->query($query);
                    if ($conn->error) {
                        //echo "<p>Something went wrong</p>";
                    }
                    $result->free();
                    $conn->close();
                } else {
                   error_log("logged in");
                   error_log($_SESSION['lastPage']);

                }
            }
            ?>