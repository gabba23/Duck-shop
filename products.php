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

<?php 
require "includes/dbh.inc.php";

$sql = "SELECT ProductName, Price, Descrption, ProductPhoto FROM Product";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>

<div class="container">

    <div class="row">

        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories
                </div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
                    <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
                    <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">Last product</div>
                <div class="card-body">
                    <img class="img-fluid" src="./assets/images/duck_3.png" />
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="bloc_left_price">3.00 $</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                <?php     foreach ($result as $things) { ?>
                    <div class="card">
                        <img class="card-img-top" src="data:image/jpeg;base64,<?php echo base64_encode($things['ProductPhoto']); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">
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
    </div>
</div>
<div class="col-12">
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
</div>
</div>

</div>
</div>
        