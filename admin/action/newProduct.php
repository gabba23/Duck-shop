<?php 
require_once("../../includes/dbh.inc.php");

$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];
$productCode = $_POST['productCode'];
$productPhoto=$_FILES["image"];
$productPhoto = addslashes(file_get_contents($_FILES['image']['tmp_name']));


if (isset($_POST['submit'])) {
  $query = $conn->prepare("INSERT INTO Product (`ProductName`, `Descrption`, `Price`, `code`, `ProductPhoto`) VALUES ('$productName', '$productDescription', '$productPrice', '$productCode', '$productPhoto')");
  $query->execute();
header("Location: ../manageProducts.php?added=1");
} 
