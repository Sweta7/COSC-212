<!--
* Hotel COSC212 - An Assignment 2
* Sweta Kumari, September 2018
* header.php will make header on each page.
 -->
<head>
    <title>RoomManager: COSC212 (2018)</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="./js/leaflet/leaflet.css"/>
    <?php
    if (isset($scriptList) && is_array($scriptList)){
        foreach ($scriptList as $script){
            echo "<script src = '$script'></script>";
        }
    }
    ?>
</head>
