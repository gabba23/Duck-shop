<?php
require_once("../../includes/dbh.inc.php");

$Article = $_POST['Article'];
$NewsDate = $_POST['NewsDate'];
$photo = $_FILES["photo"];
$Photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));



if (isset($_POST['submitit'])) {
    $result = $conn->prepare("INSERT INTO News (`Article`, `NewsDate`,  `PhotoNews`) VALUES ('$Article', '$NewsDate', '$Photo')");
    $result->execute();
    header("Location: ../manageProducts.php?added=1");
}
//}
