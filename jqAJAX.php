<?php

$zip = $_GET["zip"];


$request = "https://api.openweathermap.org/data/2.5/weather?zip=$zip,us&appid={?}";
$jsonWeather  = file_get_contents($request);
print "$jsonWeather";
?>
