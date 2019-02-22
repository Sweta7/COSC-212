<!DOCTYPE html>

<html lang="en">
    <?php
    $scriptList = array('javascript/jquery-3.3.1.min.js');
    include("htaccess/header.php");
    ?>


    <div id="main">
        <?php
        $orders = simplexml_load_file('xml/orders.xml');
        foreach ($orders->order as $order) {
            $name = $order->delivery->name;
            $email = $order->delivery->email;
            $address = $order->delivery->address;
            $city = $order->delivery->city;
            $postcode = $order->delivery->postcode;
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>address: $address</p>";
            echo "<p>city: $city</p>";
            echo "<p>postcode: $postcode</p>";
            /*foreach ($order->items->item as $item){
                $title = $item->title;
                $price = $item->price;
                echo "<p>Title: $title </p>";
                echo "<p>Price: $price </p>";
            }*/
            $items = $orders->xpath('//item');
            foreach ($items as $item) {
                $title = $item->title;
                $price = $item->price;
                echo "<p>Title: $title </p>";
                echo "<p>Price: $price </p>";

            }
        }

        ?>

    </div>

    <?php include("htaccess/footer.php"); ?>

    </body>
</html>