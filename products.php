<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/images/duck_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/images/duck_2.jpg" class="d-block w-100" alt="...">

        </div>

        <div class="carousel-item">
            <img src="./assets/images/duck_3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/images/duck_4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev light-gray" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next light-gray" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Rubber ducks</h1>
        <p class="lead text-muted mb-0">Get our ducks now, because they are great!</p>
    </div>
</section>
<span class="badge badge-light">0</span>
<!--
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
                    <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
                    <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
                </ul>
            </div>
-->

<?php

if(!isset($_SESSION))
{
    session_start();
}

require_once ('./includes/createDb.php');
require_once ('component.php');

$database = new createDb("Productdb", "Producttb");

if(isset($_POST['add'])){
    //print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");


        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script> alert('Product is already added in the cart!')</script>";
            echo "<script>window.location ='index.php' </script>";
        }else {
            $count = count($_SESSION['cart']);
            $item_array = array (
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;

        }
    }else{
        $item_array = array (
            'product_id' => $_POST['product_id']
        );
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<div class="container">
    <div class="row text-center py-5">

        <?php
        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
        ?>

    </div>
</div>



