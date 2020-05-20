

<?php
require "admin.php";
require '../includes/dbh.inc.php';
include "action/messages.php";

include "../carousel.php";
?>


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



<!-- ADD NEW PRODUCT MODAL -->

</body>

</html>