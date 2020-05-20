<?php
require "../../includes/dbh.inc.php";



if (isset($_POST['photoEditButton'])) {
    $photoEdit = addslashes(file_get_contents($_FILES['photoEdit']['tmp_name']));
    $query = $conn->prepare("UPDATE company SET DailySpecial = '$photoEdit' WHERE Number = '0'");
    $query->execute();
    header("Location: ../companyInfo.php?desc=1");
} 
?>