<?php

$zip = $_GET["zip"];


$request = "https://api.openweathermap.org/data/2.5/weather?zip=$zip,us&appid=dbd3b02d8958d62185d02e944cd5f522";
console.log($request);
$jsonWeather  = file_get_contents($request);
print "$jsonWeather";
?>
