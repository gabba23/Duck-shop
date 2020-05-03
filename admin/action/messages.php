<?php 
if (!isset ($_GET['added'])) {
    $added = 0;
} else {
    $added = $_GET['added'];
}

if ($added == 1) {
    echo "Product added";
} elseif ($added == 2) {
    echo "Product not edded. Error";
}

if (!isset ($_GET['delete'])) {
    $delete = 0;
} else {
    $delete = $_GET['delete'];
}

if ($delete == 1) {
    echo "Product deleted";
} elseif ($delete == 2) {
    echo "Product not deleted. Error";
}
?>