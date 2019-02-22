<!DOCTYPE html>

<html lang="en">

    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'leaflet/leaflet.js', 'javascript/map.js');
    include('header.php');
    ?>

<!--    <head>
        <title>Classic Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="leaflet/leaflet.css"/>
        <script src="javascript/jquery-3.3.1.min.js"></script>
        <script src="leaflet/leaflet.js"></script>
        <script src="javascript/map.js"></script>
    </head>-->

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
        <?php
        include('nav.php');
        ?>

<!--
        <nav>
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="classic.php">Classics</a>
                <li> <a href="scifi.php">Sci Fi</a>
                <li> <a href="hitchcock.php">Hitchcock</a>
                <hr>
				<li><a href="cart.php">Cart</a>
                <li>Contact</li>
            </ul>
        </nav>-->

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
        include ('footer.php');
        ?>

    </body>
</html>
