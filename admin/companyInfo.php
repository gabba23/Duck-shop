<?php
require "admin.php";
include "action/messages.php"
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



    <div class="d-flex justify-content-center">

<section class="col-2">
    <form method="post" action="action/descriptionEdit.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Description:</label>
    <textarea name="descriptionEdit" class="form-control" rows="3"></textarea>
      </div>
  <button name="descriptionEditButton" type="submit" class="btn btn-outline-info">Submit</button>
</form>
</section>

<section class="col-2">
    <form  method="post" action="action/numberEdit.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Phone number:</label>
    <input type="text" name="numberEdit" class="form-control">
      </div>
  <button name="numberEditButton" type="submit" class="btn btn-outline-info">Submit</button>
</form>
</section>

<section class="col-2">
    <form method="post" action="action/photoEdit.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Photo for daily special</label>
    <input type="file" name="photoEdit" class="form-control">
      </div>
  <button name="photoEditButton" type="submit" class="btn btn-outline-info">Submit</button>
</form>
</section>

</div>