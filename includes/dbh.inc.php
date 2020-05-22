<?php

$servername = "localhost";
$dBusername = "root";
$dBPassword = "2001";
$dbName = "duckshopdb";

$conn = mysqli_connect($servername, $dBusername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}