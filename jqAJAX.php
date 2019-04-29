<?php

$zip = $_GET["zip"];


$request = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&appid=66b77681f51a6f40fb7198eed9293758";
$jsonWeather  = file_get_contents($request);
print "$jsonWeather";
?>