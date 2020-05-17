<?php

require "includes/dbh.inc.php";

    $msg = '';

    if(isset($_POST['upload'])) {
        $image = $_FILES['image'] ['name'];
        $path = 'assets/images/' .$image;

        $sql = $conn->query("INSERT INTO slider (image_path) values ('$path')");

        if($sql) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
            $msg = 'Image Uplaoded';
        }
        else {
            $msg = 'upload failed';
        }
    }

    $result = $conn->query("SELECT image_path FROM slider");

?>


<div class="container-fluid" >
    <div class="row justify-content-center ">
        <div class="col-lg-12"  >
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                    <?php
                        $i = 0;
                        foreach ($result as $row) {
                            $actives = '';
                            if($i == 0) {
                                $actives = 'active';
                            }

                    ?>

                    <li data-target="#myCarousel" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

                    <?php $i++; }?>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($result as $row) {
                        $actives = '';
                        if($i == 0) {
                            $actives = 'active';
                    }

                    ?>
                    <div class="carousel-item <?= $actives; ?>">
                        <img src="<?= $row['image_path'] ?>" width="100%" height="auto" alt="Los Angeles">
                    </div>
                        <?php
                            $i++; }
                        ?>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 bg-dark rounded px-4">
            <h4 class="text-center text-light p-1">Select image</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="image" class="form-control p-1" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload_image">
                </div>
                <div class="form-group">
                    <h5 class="text-center text-light"><?= $msg; ?></h5>
                </div>
            </form>
        </div>
    </div>
</div>