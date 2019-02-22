<!DOCTYPE html>

<html lang="en">
    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'javascript/carousel.js');
    include('header.php');
    ?>

   <!-- <head>
        <title>Classic Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--<script src="javascript/jquery-3.3.1.min.js"></script>
        <script src="javascript/carousel.js"></script>
        <script src="javascript/cookies.js"></script>-->
<!--    </head>-->

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

        <!--<nav>

            <ul>
                <li> Home
                <li> <a href="classic.php">Classics</a>
                <li> <a href="scifi.php">Sci Fi</a>
                <li> <a href="hitchcock.php">Hitchcock</a>
                <hr>
                <li><a href="cart.php">Cart</a>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </nav>-->

        <main>
            <p>
                Welcome to Classic Cinema, your online store for classic film.
            </p>
            <div id="carousel">


            </div>
        </main>

        <?php
        include('footer.php');
        ?>

    </body>
</html>
