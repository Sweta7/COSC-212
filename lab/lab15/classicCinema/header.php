
<head>
    <title>Classic Cinema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="leaflet/leaflet.css"/>
    <?php
    if (isset($scriptList) && is_array($scriptList)){
        foreach ($scriptList as $script){
            echo "<script src = '$script'></script>";
        }
    }
    ?>
</head>



