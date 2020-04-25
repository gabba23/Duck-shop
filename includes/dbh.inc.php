<?php

$servername = "localhost";
$dBusername = "techma_olson";
$dBPassword = "6z1Cx7dnH";
$dbName = "techma_duckshop";

$conn = mysqli_connect($servername, $dBusername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}