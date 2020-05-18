<?php
require "admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Infomation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <section class="text-center">
        <h3>This is a page where you can manage company information.</h3>
    </section>
    <div class="d-flex">
<section class="col-2">
    <form>
  <div class="form-group">
    <label>Opening hour:</label>
    <input type="time" class="form-control">
    <label>Closing hour:</label>
    <input type="time" class="form-control">
      </div>
  <button name="saveTime" type="submit" class="btn btn-primary">Submit</button>
</form>
</section>

<section class="col-2">
    <form>
  <div class="form-group">
    <label>Description:</label>
    <input type="text" class="form-control">
      </div>
  <button name="saveDesc" type="submit" class="btn btn-primary">Submit</button>
</form>
</section>

<section class="col-2">
    <form>
  <div class="form-group">
    <label>Phone number:</label>
    <input type="number" class="form-control">
      </div>
  <button name="saveDesc" type="submit" class="btn btn-primary">Submit</button>
</form>
</section>

</div>