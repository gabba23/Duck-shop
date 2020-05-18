<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<form method="post" action="">
<div class="card pt-5">
  <div class="card-body mx-auto">
<h5>Do you want to delete product with id: <?php echo $_GET['id']; ?>?</h5>
<div class="d-flex justify-content-center mx-auto pt-2">
<button type="submit" name="delete" class="btn btn-outline-warning">Delete</button>
<button type="button" class="btn btn-outline-info ml-5"><a href="../manageProducts.php">Come back</a></button>
  </div>
  </div>

</div>
<div>

</div>
</form>
<?php 
require_once("../../includes/dbh.inc.php");
$idToDelete = $_GET['id'];


if (isset($_POST['delete'])) {
    $query = $conn->prepare("DELETE FROM Product WHERE ProductID = $idToDelete");
    $query->execute();
    header("Location: ../manageProducts.php?delete=1");
} 
?>