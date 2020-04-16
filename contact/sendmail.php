<?php
require_once("./session_start.php");

$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


if (isset($_POST['Submit'])) { 
    $_SESSION['subject'] = $_POST['subject'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['message'] = $_POST['message'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    };

    


$regexp = "/^[A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_-]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
$regname = "/^[A-z,.-]+$/";

$to_email = "duckshop@aleksandrakurdelska.com";
$mailHeader = "From: duckshop@aleksandrakurdelska.com";

 
if (!isset($_POST['email'])) {
    header("Location: ../about.php?erid=1");
} elseif (empty($email) || empty($subject) || empty($message) || empty($firstname) || empty($lastname)) {
    header("Location: ../about.php?erid=2");
} else {
    //if (!preg_match($regexp, $email)){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../about.php?erid=3");
        } elseif (strlen($message) <= 2) {
            header("Location: ../about.php?erid=5");
        } elseif (strlen($subject) <= 2) {
            header("Location: ../about.php?erid=6");
        }elseif (!preg_match($regname, $lastname)) {
            header("Location: ../about.php?erid=4");
        } elseif (!preg_match($regname, $firstname)) {
            header("Location: ../about.php?erid=4");
        } else {
            mail($to_email,
                $subject,
                "Name: $firstname, $lastname" . "\r\n" . "Email: $email". "\r\n" . "Message: $message"  ,
                [$mailHeader
                ]);
            mail($email,
                "Thank you for your email! $subject",
                "Name: $firstname, $lastname" . "\r\n" . "Email: $email". "\r\n" . "Message: $message",
                ["From: $to_email"]
        );
        header("Location: ../about.php?suc=1");
        session_destroy();
        }}
