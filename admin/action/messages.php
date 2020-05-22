<?php 
if (!isset ($_GET['added'])) {
    $added = 0;
} else {
    $added = $_GET['added'];
}

if ($added == 1) {
    echo "It's added";
} elseif ($added == 2) {
    echo "Product not added. Error";
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

if (!isset ($_GET['edit'])) {
    $edit = 0;
} else {
    $edit = $_GET['edit'];
}

if ($edit == 1) {
    echo "Product edited";
} elseif ($edit == 2) {
    echo "Product edits on the way";
}

if (!isset ($_GET['desc'])) {
    $desc = 0;
} else {
    $desc = $_GET['desc'];
}

if ($desc == 1) {
    echo "Description edited";
} elseif ($desc == 2) {
    echo "Product edits on the way";
}
?>