<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<?php 
require "../../includes/dbh.inc.php";
$idToEdit = $_GET['id'];

$sql = "SELECT ProductID, ProductName, Price, Descrption, code, ProductPhoto FROM Product 
            WHERE ProductID = $idToEdit";
$result = $conn->query($sql);
$productDetails = $result->fetch_array();
?>

<section class="d-flex justify-content-center mx-auto pt-5 h-100 bg-light">
    <form action="" method="post">
        <div class="form-group text-center pr-2">
            <h1>Editing: <?php echo $idToEdit ?></h1>
        </div>

        <div class="form-group text-center pr-2">
            <label for="formGroupExampleInput">Product Name</label>
            <br>
            <label for="formGroupExampleInput">
                <?php echo $productDetails{'ProductName'} ?>
            </label>
            <input type="text" class="form-control" name="productName"
                value="<?php echo $productDetails{'ProductName'} ?>">
        </div>

        <div class="form-group text-center pr-2">
            <label for="formGroupExampleInput">Description</label>
            <br>
            <label for="formGroupExampleInput">
                <?php echo $productDetails{'Descrption'} ?>
            </label>
            <input type="text" class="form-control" name="description"
                value="<?php echo $productDetails{'Descrption'} ?>">
        </div>

        <div class="form-group text-center pr-2">
            <label for="formGroupExampleInput">Price</label>
            <br>
            <label for="formGroupExampleInput">
                <?php echo $productDetails{'Price'} ?>
            </label>
            <input type="text" class="form-control" name="price" value="<?php echo $productDetails{'Price'} ?>">
        </div>

        <div class="form-group text-center pr-2">
            <label for="formGroupExampleInput">Product code</label>
            <br>
            <label for="formGroupExampleInput">
                <?php echo $productDetails{'code'} ?>
            </label>
            <input type="text" class="form-control" name="code" value="<?php echo $productDetails{'code'} ?>">
        </div>

        <!-- <div class="form-group text-center">
        <label for="formGroupExampleInput">Picture</label>
        <br>
        <img class="" height="100px" width="100px"
            src="data:image/jpeg;base64,<?php echo base64_encode($productDetails['ProductPhoto']); ?>">
        <br>
        <input type="file" name="image">

    </div> -->
        <button class="btn btn-outline-success" type="submit" name="edit">Save edits</button>
        <a href="../manageProducts.php"><button type="button" class="btn btn-outline-info ml-5">Come back</button></a>
    </form>
</section>


<?php 


if (isset($_POST['edit'])) {
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $code = $_POST['code'];

    $query = $conn->prepare("UPDATE Product SET `ProductName`='$productName', `Price`='$price', `Descrption`='$description', `code`='$code' WHERE ProductID = $idToEdit");
    $query->execute();
    header("Location: ../manageProducts.php?edit=1");
} 
?>