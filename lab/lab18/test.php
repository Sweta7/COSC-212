<!DOCTYPE html>
<html>
  <head>
    <title>PHP Sessions 1</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Page 1</h1>

 <!--   <ul>
   <?php
        $orders = simplexml_load_file('orders.xml');
        /*foreach ($orders as $delivery) {
            $name = $delivery->name;
            $email = $delivery->email;
            echo "<li> name: $name \n";
            echo "<li> email: $email \n";
        }*/
        $newOrder = $orders[0]->addChild("order", "op");
        $delivery = $newOrder->addChild('delivery');
        $delivery->addChild('name', $_POST['name']);
        $orders->saveXML('orders.xml');
        ?>
    </ul>-->
  </body>
</html>