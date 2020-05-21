<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<?php 
require "cart/index.php"

?>

<div class="container">

    <div class="row">

        <div class="col">
            <div class="row">

                <?php     $product_array = $db_handle->runQuery("SELECT * FROM Product ORDER BY ProductID ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $aNumber=> $value){
    ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-20">
                        <form method="post"
                            action="index.php?action=add&code=<?php echo $product_array[$aNumber]["code"]; ?>">
                            <img class="card-img-top"
                                src="data:image/jpeg;base64,<?php echo base64_encode($product_array[$aNumber]["ProductPhoto"]); ?> " class="img-thumbnail">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">
                                        <?php echo $product_array[$aNumber]["ProductName"]; ?>
                                    </a></h4>
                                <p class="card-text">
                                    <?php echo $product_array[$aNumber]["Descrption"]; ?>
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <p class="">
                                            <?php echo $product_array[$aNumber]["Price"]." DKK"; ?></p>
                                    </div>
                                </div>
                                    <div class="row" >
                                    <div class="col">
                                        <div>
                                            <input type="number" name="quantity" value="1" size="2" min="1" max="20" />
                                            <input type="submit" value="Add to cart" class="addBtn btn btn-outline-success float-right" /></div>
                                    </div>
                                </div>
                            </div>
                        </form>
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