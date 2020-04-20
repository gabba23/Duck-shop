<?php

if (!isset ($_GET['suc'])) {
    $suc = 0;
} else {
    $suc = $_GET['suc'];
}

if ($suc == 1) {
    echo "Thank you for your message!</br> Your message was send on: ", date("F j, Y, g:i a");
}