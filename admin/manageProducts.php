
<?php
require "admin.php";
require '../includes/dbh.inc.php';
include "action/messages.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript">


    </script>
</head>

<body>
<section class="text-center">
    <h3>This is a page for editing, adding and deleting the products.</h3>
    <br>
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#newModal">Add new
        product</button>
</section>

<?php


$sql = "SELECT ProductID, ProductName, Price, Descrption, ProductPhoto FROM Product";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>


<br>
<div class="col">
    <div class="row">

        <?php     foreach ($result as $things) { ?>
            <div class="col-12 col-md-4 col-lg-2">
                <div class="card">
                    <img class="card-img-top" height="200px"
                         src="data:image/jpeg;base64,<?php echo base64_encode($things['ProductPhoto']); ?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5><?php
                            echo $things["ProductName"];
                            ?></h5>
                        <h5>ID: <?php
                            echo $things["ProductID"];
                            ?></h5>
                        <td><?php echo '<a href="deleteProduct.php?ProductID='.$things['ProductID'].'"></a>' ?> </td>
                        </a></h4>
                        <p class="card-text">
                            <?php
                            echo $things["Descrption"];
                            ?>
                        </p>
                        <div class="row">
                            <div class="col">
                                <a href="action/deleteProduct.php?id=<?php echo $things['ProductID']; ?>"><btn class="btn btn-outline-danger">
                                        Delete</btn></a>
                            </div>
                            <div class="col">
                                <a href="action/editProduct.php?id=<?php echo $things['ProductID']; ?>"><btn class="btn btn-outline-warning">Edit</btn></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }?>
    </div>
</div>


<!-- ADD NEW PRODUCT MODAL -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="action/newProduct.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="productName"
                               placeholder="Another duck">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Product Description</label>
                        <input type="text" class="form-control" id="productDescription" name="productDescription"
                               placeholder="Awesome duck">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Product Price in DKK</label>
                        <input type="number" class="form-control" id="productPrice" name="productPrice"
                               placeholder="Expensive duck">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Product Code</label>
                        <input type="text" class="form-control" id="productCode" name="productCode"
                               placeholder="Coding duck">
                    </div>
                    <input type="file" name="image">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
                </form>


            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
    </div>
</div>

</body>

</html>