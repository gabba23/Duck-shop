<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/06da531921.js" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header> 
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white"><a href="index.php"><img src="./assets/images/Logo1.png" class="card-img-top" style="height: 200px; width: 200px;" alt="..." ></a></h2>
                </div>
                <div>
                    <?php
                           if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit"  class="btn btn-danger">Logout</button>
                            </form>';
                        }
                        else {
                            echo ' <form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input type="password" name="pwd" placeholder="Password...">
                            <button type="submit" name="login-submit" class="btn btn-success">Login</button>
                            </form>
                            <a href="signup.php"><button class="btn btn-warning btn-block">Sign up </button></a> ';
                        }
                    ?>
                   
                </div>
                
            </div>
        </div>

        <div class="container-fluid p-0">
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto float-left">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="category.html">Categories <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productpage.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
        
                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary btn-number">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <a class="btn btn-success btn-sm ml-3 justify-content-right" href="cart.php">
                            <i class="fa fa-shopping-cart"></i> Cart
                            <span class="badge badge-light"></span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        </div>

    </header>
