<?php
require "admin.php";
require '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit products</title>
</head>

<body>
    <section class="text-center">
        <h3>This is a page for editing, adding and deleting the products.</h3>
    </section>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Product name</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Edit</a>
        </div>
    </div>


    <?php 


$sql = "SELECT ProductName, Price, Descrption, ProductPhoto FROM Product";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>



    <div class="col">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <?php     foreach ($result as $things) { ?>
                <div class="card">
                    <img class="card-img-top"
                        src="data:image/jpeg;base64,<?php echo base64_encode($things['ProductPhoto']); ?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <?php
                        echo $things["ProductName"];
                        ?>
                        </a></h4>
                        <p class="card-text">
                            <?php
                        echo $things["Descrption"];
                        ?>
                        </p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger btn-block">5.00 $</p>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-success btn-block">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
}?>
            </div>

        </div>
    </div>


</body>

</html>