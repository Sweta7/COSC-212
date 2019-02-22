<!--
    Sample HTML form for Lab 7.

    Created by: Steven Mills 10/04/2014
    Last Modified by: Steven Mills 11/06/2014
-->
<!-- The form doesn't have an action or a method yet.
     We'll get to that later in the course. -->

<!DOCTYPE html>

<html lang="en">
    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'javascript/cookies.js','leaflet/leaflet.js', 'javascript/map.js');
    include('header.php');
    ?>

<!--<head>
    <title>Classic Cinema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--<script src="classicCinema.js"></script>-->
    <!--<script src="javascript/jquery-3.3.1.min.js"></script>
    <script src="javascript/cookies.js"></script>
    <script src="javascript/sampleValidator.js"></script>
    <script src="javascript/hide_cart.js"></script>

</head>-->-->

<body>
<header>
    <h1>Classic Cinema</h1>

    <div id="user">
        <div id="login">
            <form id="loginForm">
                <label for="loginUser">Username: </label>
                <input type="text" name="loginUser" id="loginUser"><br>
                <label for="loginPassword">Password: </label>
                <input type="password" name="loginPassword" id="loginPassword"><br>
                <input type="submit" id="loginSubmit" value="Login">
            </form>
        </div>

        <div id="logout">
            <p>Welcome, <span id="logoutUser"></span></p>
            <form id="logoutForm">
                <input type="submit" id="logoutSubmit" value="Logout">
            </form>
        </div>
    </div>
</header>

<!--<nav>

    <ul>
        <li> <a href="index.php">Home</a>
        <li> <a href="classic.php">Classics</a>
        <li> <a href="scifi.php">Sci Fi</a>
        <li> <a href="hitchcock.php">Hitchcock</a>
            <hr>
        <li><a href="cart.php">Cart</a>
        <li> SampleForm
        <li><a href="contact.php">Contact</a></li>
    </ul>

</nav>-->

<main>
<div>

<form id="checkoutForm" novalidate>
    <fieldset>
        <!-- First section of form is delivery address etc. -->
        <legend>Delivery Details:</legend>
        <p>
            <label for="deliveryName">Deliver to:</label>
            <input type="text" name="deliveryName" id="deliveryName" required>
        </p>
        <p>
            <label for="deliveryEmail">Email:</label>
            <input type="email" name="deliveryEmail" id="deliveryEmail">
        </p>
        <p>
            <label for="deliveryAddress1">Address:</label>
            <input type="text" name="deliveryAddress1" id="deliveryAddress1" required>
        </p>
        <p>
            <label for="deliveryAddress2"></label>
            <input type="text" name="deliveryAddress2" id="deliveryAddress2">
        </p>
        <p>
            <label for="deliveryCity">City:</label>
            <input type="text" name="deliveryCity" id="deliveryCity" required>
        </p>
        <p>
            <label for="deliveryPostcode">Postcode:</label>
            <input type="text" name="deliveryPostcode" id="deliveryPostcode" maxlength="4" required class="short">
        </p>
    </fieldset>

    <!-- Next section has credit card details -->
    <fieldset>
        <legend>Payment Details:</legend>
        <p>
            <label for="cardType">Card type:</label>
            <select name="cardType" id="cardType">
                <option value="amex">American Express</option>
                <option value="mcard">Master Card</option>
                <option value="visa">Visa</option>
            </select>
        </p>
        <p>
            <label for="cardNumber">Card number:</label>
            <input type="text" name="cardNumber" id="cardNumber" maxlength="16" required>
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
            </select> / <select name="cardYear" id="cardYear">
                <option value="2014">2014</option>
                <option value="2015">2015</option>
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
            <input type="text" class="short" maxlength="4" name="cardValidation" id="cardValidation" required>
        </p>
    </fieldset>
    <input type="submit">
</form>
    <div id="errors"></div>
</div>
</main>

    <?php
    include ('footer.php');
    ?>

</body>
</html>
