<?php
require "cart/index.php"

?>










<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Daily special offer!</h3>
            </div>
            <div class="col-md-2 float-right">
                <!-- Controls -->
                <div class="controls float-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                                data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <?php     $product_array = $db_handle->runQuery("SELECT * FROM Product ORDER BY rand() LIMIT 4");
                        if (!empty($product_array)) {
                        foreach($product_array as $aNumber=> $value){
                        ?>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img class="card-img-top" height="200px" width="auto"
                                         src="data:image/jpeg;base64,<?php echo base64_encode($product_array[$aNumber]["ProductPhoto"]); ?>">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h4 class="card-title"><a href="product.html" title="View Product">
                                                    <?php echo $product_array[$aNumber]["ProductName"]; ?>
                                                </a></h4>
                                            <p class="card-text">
                                                <?php echo $product_array[$aNumber]["Descrption"]; ?>
                                            </p>
                                            <p class="">
                                                <?php echo $product_array[$aNumber]["Price"]." DKK"; ?></p>
                                        </div>

                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                        <div>

                                            <input type="submit" value="Add to cart" class="addBtn btn btn-outline-success float-right" /></div>

                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        }?>



                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="item active">
                            <div class="row">
                                <?php     $product_array = $db_handle->runQuery("SELECT * FROM Product ORDER BY rand() LIMIT 4");
                                if (!empty($product_array)) {
                                    foreach($product_array as $aNumber=> $value){
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img class="card-img-top" height="200px" width="auto"
                                                         src="data:image/jpeg;base64,<?php echo base64_encode($product_array[$aNumber]["ProductPhoto"]); ?>">
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h4 class="card-title"><a href="product.html" title="View Product">
                                                                    <?php echo $product_array[$aNumber]["ProductName"]; ?>
                                                                </a></h4>
                                                            <p class="card-text">
                                                                <?php echo $product_array[$aNumber]["Descrption"]; ?>
                                                            </p>
                                                            <p class="">
                                                                <?php echo $product_array[$aNumber]["Price"]." DKK"; ?></p>
                                                        </div>

                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                        <div>

                                                            <input type="submit" value="Add to cart" class="addBtn btn btn-outline-success float-right" /></div>

                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }?>



                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
