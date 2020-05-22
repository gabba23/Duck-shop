<?php

require "includes/dbh.inc.php";


$sql = "SELECT NewsID, Article, PhotoNews, NewsDate FROM News LIMIT 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


        echo '<div class="row">
                <div class="well col-8 fluid" >
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" width="200px" height="auto"  src="data:image/jpeg;base64,'.base64_encode( $row['PhotoNews'] ).'"/>
                
                        </a>
                        <div class="media-body">
                            
                            
                            <h1 class="pb-2">'. $row['Article']. '</h1>
                            <ul class="list-inline list-unstyled">
                            <div style ="position: absolute; bottom: 0; left:0; margin-left: 250px; margin-bottom: 20px;">
                                <li><span><i class="glyphicon glyphicon-calendar"></i> Date posted: '. $row['NewsDate']. ' </span></li>
                            </div>
                               
                                
                            </ul>
                            <div style ="position: absolute; bottom: 0;right:0; margin: 20px;">
                                <a class="btn btn-primary" href="productpage.php">Browse products</a>
                            </div>
                        </div>
                    </div>
                </div>
</div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>




