<?php
require "../../includes/dbh.inc.php";



if (isset($_POST['descriptionEditButton'])) {
    $description = $_POST['descriptionEdit'];
    $query = $conn->prepare("UPDATE company SET About = '$description' WHERE Number = '0'");
    $query->execute();
    header("Location: ../companyInfo.php?desc=1");
} 
?>