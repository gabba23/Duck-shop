<?php


if (!isset ($_GET['erid'])) {
    $erid = 0;
} else {
    $erid = $_GET['erid'];
}


if ($erid == 1) {
    $mailerror = "Email is not set";
} elseif ($erid == 2) {
    $wholeerror = "You didn't fill whole form";
} elseif ($erid == 3) {
    $validerror =  "You didn't put vaild email";
} elseif ($erid == 4) {
    $nameerror = "You didn't put vaild name";
} elseif ($erid == 5) {
    $messageerror = "Message has to be longer than 2 characters";
} elseif ($erid == 6) {
    $subjecterror = "You need to provide subject";
} else {
    "We have a problem. Contact the Duck Shop directly";
}