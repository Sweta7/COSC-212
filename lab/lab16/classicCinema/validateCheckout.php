<!DOCTYPE html>
<html lang="en">

<?php
$scriptList = array('javascript/jquery-3.3.1.min.js', 'javascript/Cookies.js');
include("htaccess/header.php");
include("htaccess/validateFunctions.php");
?>
<div id="main">
<p> Placeholder for checkout validation </p>

<?php
$formOk = false;
if (isset($_POST['submit'])) {
    $formOk = true;

    //To check delivery name
    if (isEmpty($_POST['deliveryName'])) {
      $formOk = false;
        echo "<p>You must enter a name to deliver to</p>";
    }
    //To check email address
    if (isEmpty($_POST['deliveryEmail'])) {
        $formOk = false;
        echo "<p>You must enter an email address</p>";
    }elseif (!isEmail($_POST['deliveryEmail'])) {
      $formOk = false;
        echo "<p>That doesn't look like a valid email address</p>";
    }

    //To check delivery address
    if (isEmpty($_POST['deliveryAddress1'])) {
      $formOk = false;
        echo "<p>You must enter a delivery address</p>";
    }

    //To check delivery city
    if (isEmpty($_POST['deliveryCity'])) {
      $formOk = false;
        echo "<p>You must enter a city to deliver to</p>";
    }

    //To checking postcode
    if (isEmpty($_POST['deliveryPostcode'])) {
           $formOk = false;
           echo "<p>You must enter a postcode</p>";
    }elseif (!isDigits($_POST['deliveryPostcode']) || !checkLength($_POST['deliveryPostcode'], 4)) {
          $formOk = false;
          echo "<p>Postcodes must be exactly 4 digits long</p>";
           }

      //To check card
           if (isEmpty($_POST['cardNumber'])) {
             $formOk = false;
              echo "<p>You must enter a credit card number</p>";
           }elseif (!checkCardNumber($_POST['cardType'], $_POST['cardNumber'])){
             $formOk = false;
              echo "<p>You must enter a credit card number</p>";
           }

        if (!checkCardDate($_POST['cardMonth'], $_POST['cardYear'])) {
         $formOk = false;
         echo "<p>Enter a valid credit card date</p>";
     }
     if (!checkCardVerification($_POST['cardType'], $_POST['cardValidation'])) {
           $formOk = false;
           echo "<p>Please enter a vaild CVC</p>";
       }
      }

?>
</div>
<?php include("htaccess/footer.php"); ?>
</body>
</html>
