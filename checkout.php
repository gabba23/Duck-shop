<?php

require "header.php";
require "cart/index.php";

?>





    <div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
    </div>

    <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary
        </div>
        <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you
                have entered.</p>
            <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                        class="text-muted">Order Subtotal </strong><strong>
                        <?php echo $item_total." DKK"; ?></strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                        class="text-muted">Shipping and handling</strong><strong>FREE</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                        class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">DKK <?php echo $item_total." DKK"; ?></h5>
                </li>
            </ul><a href="checkout.php" class="btn btn-dark rounded-pill py-2 btn-block">Place order</a>
        </div>


    </div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="seller@designerfotos.com">
        <input type="hidden" name="item_name" value="hat">
        <input type="hidden" name="item_number" value="123">
        <input type="hidden" name="amount" value="15.00">
        <input type="hidden" name="first_name" value="John">
        <input type="hidden" name="last_name" value="Doe">
        <input type="hidden" name="address1" value="9 Elm Street">
        <input type="hidden" name="address2" value="Apt 5">
        <input type="hidden" name="city" value="Berwyn">
        <input type="hidden" name="state" value="PA">
        <input type="hidden" name="zip" value="19312">
        <input type="hidden" name="night_phone_a" value="610">
        <input type="hidden" name="night_phone_b" value="555">
        <input type="hidden" name="night_phone_c" value="1234">
        <input type="hidden" name="email" value="jdoe@zyzzyu.com">
        <input type="image" name="submit"
               src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
               alt="PayPal - The safer, easier way to pay online">
    </form>


<?php

require "footer.php";

?>