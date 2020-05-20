<?php

require "header.php";

?>


<?php

require "carousel.php";

?>


<?php

require "news.php";

?>


    <!-- /.row -->


    <!-- /.row -->

    </div>


<?php

require "featured.php"
?>


    <main>
        <?php
        if (isset($_SESSION['userId'])) {

        }
        else {

        }
        ?>
        <br>
        <br>

        <div class="container">

            <div class="row">
                <div class="col-md-8 mb-5">
                    <h2>What We Do</h2>
                    <hr>
                    <p>We be selling best rubber duckies ever! </p>
                    <p>If you want to find out more about us click on the button!</p>
                    <a class="btn btn-primary btn-lg" href="about.php">About page &raquo;</a>
                </div>

            </div>


    </main>




<?php

require "footer.php";

?>