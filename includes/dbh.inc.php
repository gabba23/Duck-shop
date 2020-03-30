<?php

$servername = "localhost";
$dBusername = "root";
$dBPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dBusername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}