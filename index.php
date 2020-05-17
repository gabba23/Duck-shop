<?php

    require "header.php";

?>


<?php

    require "carousel.php"

?>


<?php

    require "news.php";
    require "featured.php"
?>


    <main>
        <?php
            if (isset($_SESSION['userId'])) {

            }
            else {

            }
        ?>

    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="slider-carousel" data-slide-to="0" class=""></li>
                            <li data-target="slider-carousel" data-slide-to="1" class=""></li>
                            <li data-target="slider-carousel" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Lets</span>-Shop</h1>
                                    <h2>ducks</h2>
                                    <p>let's a gofeafaefafefafeafafafdghfdshetaugagdfa</p>
                                    <a href="productpage.php" class="btn btn-default get">Gon get</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="" alt="">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </main>




<?php

    require "footer.php";

?>