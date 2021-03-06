<?php
require "header.php";
require "cart/index.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Checkout</title>
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <hr>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <!-- <span class="badge badge-secondary badge-pill"><?php echo $item["quantity"]; ?></span> -->
      </h4>
      <ul class="list-group mb-3">
      <?php
if (isset($_SESSION["cart_item"])) {
    $item_total = 0;
    foreach ($_SESSION["cart_item"] as $item) {
        ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo $item["name"]; ?></h6>
          </div>
          <span class="text-muted"> <?php echo $item["quantity"]; ?></span>
         
          <span class="text-muted"><?php echo $item["price"] . " DKK"; ?></span>
        </li><?php  $item_total += ($item["price"] * $item["quantity"]);} ?>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total:</span>
          <strong><?php echo $item_total . " DKK" ?> </strong>
        </li>
      </ul>
    <?php } ?>  
    </div>
    <?php
      require "includes/dbh.inc.php";
      $currentUser = $_SESSION['userUid'];
      $query = ("SELECT PhoneNumber, Email, FirstName, LastName, Street, City, Country FROM Users WHERE `Username` = '$currentUser'");
      $result = $conn->query($query); 
      $row = $result->fetch_assoc();
       ?>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <h6 class="mb-3">Same as the account, you can change it in settings</h6>
      <form action="includes/checkdatabase.php" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" value="<?php echo $row['FirstName'] ?>" value="" disabled>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" value="<?php echo $row['LastName'] ?>" value="" disabled>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" placeholder="" value="<?php echo $row['Email'] ?>" disabled>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" aria-valuemax="<?php echo $row['Street'] ?>" disabled>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" disabled>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" disabled>
              <option value="">Choose...</option>
              <option>Denmark</option>
              <option>Iceland</option>
              <option>Lithuania</option>
              <option>Poland</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="row-md-5 mb-3">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" value="<?php echo $row['City'] ?>" disabled>
            <div class="invalid-feedback">
              City required.
            </div>
          </div>
        </div>

        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3 bg-transparent">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3 bg-transparent">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Ready to buy</button>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>

<?php 
include "footer.php"
?>