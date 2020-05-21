
hola
<?php 
require_once("dbh.inc.php");
require "../cart/index.php";

$currentUser = $_SESSION['userUid'];
foreach ($_SESSION["cart_item"] as $item) {
    $item_total += ($item["price"] * $item["quantity"]);
}

echo $_SESSION["cart_item"];

$query = ("SELECT UserID FROM Users WHERE `Username` = '$currentUser'");
$result = $conn->query($query); 
$row = $result->fetch_assoc();
echo $row['UserID'];
$currentUserID = $row['UserID'];

$stmt = $conn->prepare("INSERT INTO Orders (`UserID`, `TotalPrice`) VALUES (?, ?)");
$stmt->bind_param("ii", $currentUserID, $item_total);
$stmt->execute();

echo $item_total;