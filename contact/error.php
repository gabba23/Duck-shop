<?php

//put as a pop-up next to the submit button
$erid = $_GET['erid'];

if ($erid == 1) {
    echo "Email is not set";
} elseif ($erid == 2) {
    echo "You didn't fill whole form";
} elseif ($erid == 3) {
    echo "You didn't put vaild email";
} elseif ($erid == 4) {
    echo "You didn't put vaild name";
} elseif ($erid == 5) {
    echo "Message has to be longer than 2 characters";
} elseif ($erid == 6) {
    echo "You need to provide subject";
} else {
   echo "We have a problem. Contact the Duck Shop directly";
}