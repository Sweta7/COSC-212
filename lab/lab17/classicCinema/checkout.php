<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'javascript/Cookies.js',
      'javascript/Checkout.js', 'javascript/ShowHide.js');
    include('htaccess/header.php');
    ?>
    <?php
    function sessionVariable($value){
        if (isset($_SESSION[$value])){
            $newValue = $_SESSION[$value];
            echo "value='$newValue'";
    }
}
     ?>
    <main>
    <!-- Content is JavaScript driven -->
    <h3>Shopping Cart Contents</h3>
    <div id="cart"></div>
    <div id="errors"></div>
    <form id="checkoutForm" action="validateCheckout.php" method="POST" novalidate>
        <fieldset>
            <legend>Delivery Details:</legend>
            <p>
                <label for="deliveryName">Deliver to:</label>
                <input type="text" name="deliveryName" id="deliveryName" required
                <?php sessionVariable('deliveryName');
                 ?> >
            </p>
            <p>
                <label for="deliveryEmail">Email:</label>
                <input type="email" name="deliveryEmail" id="deliveryEmail"
                <?php sessionVariable('deliveryEmail');
                 ?> >
            </p>
            <p>
                <label for="deliveryAddress1">Address:</label>
                <input type="text" name="deliveryAddress1" id="deliveryAddress1" required
                <?php sessionVariable('deliveryAddress1');
                 ?> >
            </p>
            <p>
                <label for="deliveryAddress2"></label>
                <input type="text" name="deliveryAddress2" id="deliveryAddress2">
            </p>
            <p>
                <label for="deliveryCity">City:</label>
                <input type="text" name="deliveryCity" id="deliveryCity" required
                <?php sessionVariable('deliveryCity');
                 ?> >
            </p>
            <p>
                <label for="deliveryPostcode">Postcode:</label>
                <input type="text" name="deliveryPostcode" id="deliveryPostcode" maxlength="4" required class="short"
                <?php sessionVariable('deliveryPostcode');
                 ?> >
            </p>
        </fieldset>

        <fieldset>
            <legend>Payment Details:</legend>
            <p>
                <label for="cardType">Card type:</label>
                <select name="cardType" id="cardType">
                    <?php
                    $cardSelected = $_SESSION['cardType'];
                    if ($cardSelected === 'amex'){
                        echo "<option value='amex' selected>American Express</option>";
                    } else {
                        echo "<option value='amex'>American Express</option>";
                    }
                    if ($cardSelected === 'mcard'){
                        echo "<option value='mcard' selected>Master Card</option>";
                    } else {
                        echo "<option value='mcard'>Master Card</option>";
                    }
                    if ($cardSelected === 'visa'){
                        echo "<option value='visa' selected>Visa</option>";
                    } else {
                        echo "<option value='visa'>Visa</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label for="cardNumber">Card number:</label>
                <input type="text" name="cardNumber" id="cardNumber" maxlength="16" required
                    <?php sessionVariable('cardNumber');
                    ?> >
            </p>
            <p>
                <label for="cardMonth">Expiry date:</label>
                <select name="cardMonth" id="cardMonth">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <label for="cardYear" class="tight">/</label>
                <select name="cardYear" id="cardYear">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </p>
            <p>
                <label for="cardValidation">CVC:</label>
                <input type="text" class="short" maxlength="4" name="cardValidation" id="cardValidation" required
                    <?php sessionVariable('cardValidation');
                    ?> >
            </p>
        </fieldset>
        <input type="submit" name="submit">
    </form>
</main>

<?php
include ('htaccess/footer.php');
?>
</body>
</html>
