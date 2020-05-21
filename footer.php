<footer class="footer">
      <div class="container bottom_border">
      <div class="row">
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
      <!--headin5_amrc-->
      <p class="mb10">You can shop only on our awesome website, but paid orders can be picked up in our HQ.</p>
      <p><i class="fa fa-location-arrow"></i> Duck Street 1, Duck City, Ducking Land</p>
      <p><i class="fa fa-phone"></i>
       <?php
       require "includes/dbh.inc.php";

      $query = "SELECT ContactNumber FROM company";
      $result = $conn->query($query); 
      $row = $result->fetch_assoc();
      echo $row['ContactNumber'];
       ?>
      </p>
      <p><i class="fa fa fa-envelope"></i> duckshop@aleksandrakurdelska.com </p> 
      </div>
      
      
      
      
      
      <div class=" col-sm-4 col-md  col-12 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
      <!--headin5_amrc ends here-->
      
      <ul class="footer_ul2_amrc">
      <li><a href="#"><i class="fab fa-linkedin fleft padding-right"></i> </a><p>Aleksandra's Linkedin<a href="https://www.linkedin.com/in/aleksandra-maryla-kurdelska-2639b7174/"></a></p></li>
      <li><a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a><p>Gabrielius Facebook<a href="https://www.facebook.com/gabrielius.cernius"></a></p></li>
      <li><a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a><p>Halldor's Facebook<a href="https://www.facebook.com/halldor.ingolfsson"></a></p></li>
      </ul>
      <!--footer_ul2_amrc ends here-->
      </div>
      



      <div class=" col-sm-2 col-sm  col-2 col">
      <a href="./admin/admin.php"><h5 class="headin5_amrc col_white_amrc pt2">ADMIN</h5></a>
      </div>



      </div>
      </div>
      
      
      <div class="container">
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center">Copyright @2020 | Designed by Aleksandra, Gabe and Dori</a></p>
      
     
      <!--social_footer_ul ends here-->
      </div>
    
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>