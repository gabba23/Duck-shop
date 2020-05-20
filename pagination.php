<?php

require "includes/dbh.inc.php";



$results_per_page = 10;

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

//while ($row = mysqli_fetch_array($result)) {
//    echo $row['ProductID'] . ' ' . $row['ProductName'] . '<br>';
//}

$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql = "SELECT * FROM product LIMIT " . $this_page_first_result . ',' . $results_per_page;
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo $row ["ProductID"] . ' ' .$row['ProductName'] . '<br>';
}


for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<a href="productpage.php?page=' . $page . '">' . $page . '</a> ' ;
}