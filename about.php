<main>
<?php

require "header.php";

?>




        <div class="bg-light">
            <div class="container py-2">
              <div class="row h-100 align-items-center py-2">
                <div class="col-lg-6">
                  <h1 class="display-4">Best ducks, only in Mother Duckin Shop!</h1>
                  <p class="lead text-muted mb-0">Welcome to our webshop! We are here to offer you the best rubber duck on the internet.</p>
                  
                              <u></u></a>
                  </p>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="./assets/images/Logo1.png" alt="" class="img-fluid"></div>
              </div>
            </div>
          </div>

          <div class="bg-white py-5">
            <div class="container py-5">
              <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1">

                <?php

                include "./contact/error.php";
                include "./contact/success.php";
            
                ?>
                <form method="post" action="./contact/sendmail.php">
                <?php if (isset($wholeerror)) {
                    echo $wholeerror;
                }
                ?>
                  <h3>Do you have a question? Get in touch with us by sending the form!</h3>

                  First name: <input type="text" name="firstname" value="<?php echo $_SESSION['firstname'];?>">
                  <?php if (isset($nameerror)) {
                      echo $nameerror;
                  }
                ?> <br>

                  Last name: <input type="text" name="lastname" value="<?php echo $_SESSION['lastname'];?>">
                  <?php if (isset($nameerror)) {
                      echo $nameerror;
                  }
                  ?> <br>

                  Email: <input type="text" name="email" value="<?php echo $_SESSION['email'];?>">
                  <?php if (isset($mailerror)) {
                      echo $mailerror;
                  } elseif (isset($validerror)) {
                      echo $validerror;
                  }
                  ?> <br>
                  Subject: <input type="text" name="subject" value="<?php echo $_SESSION['subject'];?>">
                  <?php if (isset($subjecterror)) {
                      echo $subjecterror;
                  }
                  ?> <br>
                  Message: <br>
                  <textarea name="message" rows="20" cols="50" value="<?php echo $_SESSION['message'];?>"></textarea>
                  <?php if (isset($messageerror)) {
                    echo $messageerror;
                }
                ?> <br>
                  <input type="submit" name="Submit" value="Submit">
                </form>




                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="./assets/images/duck_9.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
              </div>
              <div class="row align-items-center">
                <div class="col-lg-5 px-5 mx-auto"><img src="./assets/images/duck_12.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                <div class="col-lg-6">
                  <h2 class="font-weight-light">Are you a fan of rubber ducks?</h2>
                  <p class="font-italic text-muted mb-4">Buy yourself a new, premium quality toy, that all your friends are going to be jealous about.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Go to products</a>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-light py-5">
            <div class="container py-5">
              <div class="row mb-4">
                <div class="col-lg-5">
                  <h2 class="display-4 font-weight-light">Our team</h2>
                  <p class="font-italic text-muted"></p>
                </div>
              </div>

              <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-4 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Aleksandra Maryla Kurdelska</h5><span class="small text-uppercase text-muted">Database designer</span>
                    <ul class="social mb-0 list-inline mt-3">
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-4 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Halldór Ingólfsson</h5><span class="small text-uppercase text-muted">Designer</span>
                    <ul class="social mb-0 list-inline mt-3">
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-4 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Gabrielius Cernius</h5><span class="small text-uppercase text-muted">Code stuff</span>
                    <ul class="social mb-0 list-inline mt-3">
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <!-- End-->


              </div>
            </div>
          </div>


    </main>



    <?php

require "footer.php";

?>