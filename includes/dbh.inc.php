<?php

$servername = "localhost";
$dBusername = "root";//"techma_olson";
$dBPassword = "";//"6z1Cx7dnH";
$dbName = "duckshopdb";//"techma_duckshop";

$conn = mysqli_connect($servername, $dBusername, $dBPassword, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}