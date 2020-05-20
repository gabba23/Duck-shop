<?php
require "cart/index.php"

?>

<br>
<div class="container cta-1 ">
    <div class="col-md-9">
        <h3>
            Daily special offer!</h3>

    </div>
    <div class="container">
        <div class="row blog">
            <div class="col-md-12">


                <?php

                $sql = "select * from product where ProductID=? ORDER BY discount DESC";

                foreach($datadisc as $rowsdisc) {

                    if($subtl < $rowsdisc['disc_amt'])
                        continue;

                    echo $subtl."*".$rowsdisc['disc_percntge']."/"."100";
                    $subtldisc = ($subtl*$rowsdisc['disc_percntge'])/100;
                    $subtl = $subtl-$subtldisc;
                    break;

                }
                ?>>

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php     $product_array = $db_handle->runQuery("SELECT * FROM Product ORDER BY rand() LIMIT 3");
                            if (!empty($product_array)) {
                                foreach($product_array as $aNumber=> $value){
                                    ?>
                                    <div class="col-md-4" >
                                        <div class="item-box-blog">
                                            <div class="item-box-blog-image">
                                                <!--Date-->

                                                <!--Image-->
                                                <figure> <img class="card-img-top" height="200px" width="auto"
                                                              src="data:image/jpeg;base64,<?php echo base64_encode($product_array[$aNumber]["ProductPhoto"]); ?>"> </figure>
                                            </div>
                                            <div class="item-box-blog-body">
                                                <!--Heading-->
                                                <div class="item-box-blog-heading">
                                                    <a href="#" tabindex="0">
                                                        <h5> <?php echo $product_array[$aNumber]["ProductName"]; ?></h5>
                                                    </a>
                                                </div>
                                                <!--Data-->
                                                <div class="item-box-blog-data" style="padding: px 15px;">
                                                    <p><?php echo $product_array[$aNumber]["Descrption"]; ?></p>
                                                </div>
                                                <!--Text-->
                                                <div class="item-box-blog-text">

                                                    <p><?php echo $product_array[$aNumber]["Price"]." DKK"; ?></p>
                                                </div>

                                                <input type="submit" value="Add to cart" class="addBtn btn btn-outline-success float-right" />


                                                <!--Read More Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }?>
                            <!--.row-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>
</div>
</div>

</div>
</div>
<br>