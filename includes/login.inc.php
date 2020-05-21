<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM Users WHERE Username=? OR Email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['Password']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                } else if ( $row['IsAdmin'] == 1 && $pwdCheck == true){
                    header("Location: ../admin/admin.php");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['UserID'];
                    $_SESSION['userUid'] = $row['Username'];
                    $_SESSION['fnameId'] = $row['FirstName'];
                    $_SESSION['lnameId'] = $row['LastName'];
                    $_SESSION['phoneId'] = $row['PhoneNumber'];
                    $_SESSION['streetId'] = $row['Street'];
                    $_SESSION['cityId'] = $row['City'];
                    $_SESSION['countryid'] = $row['Country'];
                    $_SESSION['emailId'] = $row['Email'];

                    header("Location: ../index.php?login=success");
                    exit();
                } 
                else {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}

else {
    header("Location: ../index.php");
    exit();
}