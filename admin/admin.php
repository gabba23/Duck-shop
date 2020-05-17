<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <section class="jumbotron text-center">
        <div class="container pb-3">
            <h1 class="jumbotron-heading">Welcome to admin page.</h1>
            <p class="lead text-muted mb-0">Here you can change the products, create the invoice and see the orders.</p>
        </div>
        <a href="../index.php"><button type="button" class="btn btn-outline-dark">Come back to main page</button></a>
        <ul class="nav justify-content-center pt-3">
            <li class="nav-item">
                <a class="nav-link active" href="manageProducts.php">Manage products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="invoice.php">Invoice</a>
            </li>
        </ul>
    </section>

</body>

</html>