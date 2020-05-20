<?php
require "../../includes/dbh.inc.php";



if (isset($_POST['numberEditButton'])) {
    $numberEdit = $_POST['numberEdit'];
    $query = $conn->prepare("UPDATE company SET ContactNumber = '$numberEdit' WHERE Number = '0'");
    $query->execute();
    header("Location: ../companyInfo.php?desc=1");
} 
?>