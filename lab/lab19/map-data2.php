<?php
$json_input = file_get_contents("map-data-updated.json");
$json = json_decode($json_input,true);
var_dump($json);
print("<hr>");

//To capitalised 'HCL lab'
echo strtoupper($json["features"][1]["properties"]["description"]);
$json["features"][1]["properties"]["description"] = "HCL LAB";
file_put_contents("map-data-updated.json", json_encode($json));
var_dump($json);

print("<hr>");
unset($json["features"][0]);
file_put_contents("map-data-updated.json", json_encode($json));
var_dump($json);
?>