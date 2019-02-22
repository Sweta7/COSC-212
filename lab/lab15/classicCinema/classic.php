<!DOCTYPE html>

<html lang="en">

    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js', 'javascript/cookies.js', 'javascript/showHide.js',
        'javascript/cart.js', 'javascript/cart_content.js', 'javascript/review.js' );
    include('header.php');
    ?>

<!--    <head>
        <title>Classic Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="javascript/jquery-3.3.1.min.js"></script>
        <script src="javascript/cookies.js"></script>
        <script src="javascript/showHide.js"></script>
        <script src="javascript/cart.js"></script>
        <script src="javascript/cart_content.js"></script>
        <script src="javascript/review.js"></script>
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

<!--        <nav>
            <ul>
                <li> <a href="index.php">Home</a>
                <li> Classics
                <li> <a href="scifi.php">Sci Fi</a>
                <li> <a href="hitchcock.php">Hitchcock</a>
                <hr>
                <li><a href="cart.php">Cart</a>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>-->


        <main>
            <h2>Classic Films</h2>

            <section class="film">
                <img src="images/Gone_With_the_Wind.jpg" alt="Gone With the Wind">
                <h3>Gone With the Wind (1939)</h3>
                <p>Directed by: Victor Fleming, George Cukor, Sam Wood</p>
                <p>Starring: Clark Gable, Vivien Leigh, Leslie Howard, Olivia de Havilland, Hattie McDaniel</p>
                <p>An epic historical romance and winner of 8 Academy Awards (from 13 nominations).</p>
                <p>
                    $<span class="price">13.99</span>
                    <input type="button" value="Add to Cart" class="buy">
                </p>
            </section>

            <section class="film">
                <img src="images/The_Jazz_Singer.jpg" alt="The Jazz Singer">
                <h3>The Jazz Singer (1927)</h3>
                <p>Directed by: Alan Crosland</p>
                <p>Starring: Al Jolson, May McAvoy, Warner Oland, Cantor Rosenblatt</p>
                <p>The first feature length 'talkie', The Jazz Singer is a piece of cinematic history</p>
                <p>
                $<span class="price">13.99</span>
                <input type="button" value="Add to Cart" class="buy">
                </p>
            </section>

            <section class="film">
                <img src="images/Metropolis.jpg" alt="Metropolis">
                <h3>Metropolis (1927)</h3>
                <p>Directed by: Fritz Lang</p>
                <p>Starring: Alfred Abel, Brigitte Helm, Gustav Fr&ouml;hlich, Rudolf Klein-Rogge</p>
                <p>A lovingly restored version of Fritz Lang's dystopian masterpiece, one of the great achievements of the silent era.</p>
                <p>
                $<span class="price">19.99</span>
                <input type="button" value="Add to Cart" class="buy">
                </p>
            </section>

        </main>

        <?php
        include ('footer.php');
        ?>

    </body>
</html>
