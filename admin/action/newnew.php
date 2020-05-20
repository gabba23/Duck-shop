<?php
require_once("../../includes/dbh.inc.php");

$Article = $_POST['Article'];
$NewsDate = $_POST['NewsDate'];
$photo = $_FILES["photo"];
$Photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));



if (isset($_POST['submitit'])) {
    $result = $conn->prepare("INSERT INTO News (`Article`, `NewsDate`,  `photo`) VALUES ('$Article', '$NewsDate', '$photo')");
    $result->execute();

}
//}
