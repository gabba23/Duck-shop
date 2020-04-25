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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LctBe4UAAAAAMdvBsTDdmD_k-2RSSKQmsK64xPt';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    

}

 
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
            if ($recaptcha->score >= 0.5) {
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
            } else {
                header("Location: ../about.php?erid=7");
            }
            
        header("Location: ../about.php?suc=1");
        session_destroy();
        }}