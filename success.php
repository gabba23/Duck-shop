<?
$servername = "localhost";
$dBusername = "root";//"techma_olson";
$dBPassword = "";//"6z1Cx7dnH";
$dbName = "duckshopdb";//"techma_duckshop";

$conn = mysqli_connect($servername, $dBusername, $dBPassword, $dbName);
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
session_start();
$query = 'INSERT INTO orders VALUES (\\'\\',\\''.$_SESSION['product_name'].'\\',\\''.$_SESSION['product_price'].'\\')';
mysql_query($query);
echo('Thank you for choosing our services. Your payment is recieved');
?>