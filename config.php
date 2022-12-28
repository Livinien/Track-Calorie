<?php

$servername = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "track_calorie";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection Failed !".mysqli_connect_error());
}

?>