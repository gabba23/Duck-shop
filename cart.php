
<?php

if(!isset($_SESSION))
{
    session_start();
}
require_once ('./includes/createDb.php');
require_once ('component.php');

$db = new createDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if ($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);

            }
        }
    }
}

?>


<?php

require "header.php";

?>

<main>

    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                            </thead>


                            <div class="container-fluid">
                                <div class="row px-5">
                                    <div class="col-md-7">
                                        <div class="shopping-cart">
                                            <h6>My cart</h6>
                                            <hr>

                                            <?php

                                            $total = 0;
                                            if(isset($_SESSION['cart'])){
                                                $product_id = array_column($_SESSION['cart'], 'product_id');

                                                $result = $db->getData();
                                                while ($row = mysqli_fetch_assoc($result)){
                                                    foreach ($product_id as $id){
                                                        if($row['id'] == $id){
                                                            cartElement($row['product_image'],$row['product_name'],$row['product_price'], $row['id']);
                                                            $total = $total + (int)$row['product_price'];
                                                        }
                                                    }
                                                }
                                            }else {
                                                echo "<h5> Cart is emtpy </h5>";
                                            }

                                            ?>


                                        </div>
                                    </div>
                                    <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                                        <div class="pt-4">
                                            <h6>Price details</h6>
                                            <hr>
                                            <div class="row price-details">
                                                <div class="col-md-6">
                                                    <?php

                                                    if(isset($_SESSION['cart'])){
                                                        $count = count($_SESSION['cart']);
                                                        echo "<h6>Price($count items)</h6>";
                                                    }else {
                                                        echo "<h6>Price(0 items)</h6>";
                                                    }

                                                    ?>
                                                    <h6>Delivery Chargers</h6>
                                                    <hr>
                                                    <h6>Amount payable</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6><?php echo $total ?></h6>
                                                    <h6 class="text-success">FREE</h6>
                                                    <hr>
                                                    <h6>
                                                        <?php echo $total; ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                    </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>DKK <?php echo $total; ?></strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>FREE</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>1 dola</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">DKK <?php echo $total; ?></h5>
                                </li>
                            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>


<?php

require "footer.php";

?>