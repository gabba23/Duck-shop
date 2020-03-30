<?php

    require "header.php";

?>


    <main>
       <section>
           <?php

            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p> Fill in all fields!</p>' ;
                }
                else if ($_GET['error'] == "invaliduidemail") {
                    echo '<p> Invalid username and e-mail!</p>' ;
                }
                else if ($_GET['error'] == "invaliduid") {
                    echo '<p>Invalid username!</p>' ;
                }
                else if ($_GET['error'] == "invalidmail") {
                    echo '<p>Invalid e-mail!</p>' ;
                }
                else if ($_GET['error'] == "passwordcheck") {
                    echo '<p>Your passwords do not match!</p>' ;
                }
                else if ($_GET['error'] == "usertaken") {
                    echo '<p>Username is already taken!</p>' ;
                }
            }
            else if ($_GET['signup'] == "success") {
                echo '<p>Signup successful</p>' ;
            }

           ?>
           
        

            <form action="includes/signup.inc.php" method="post"">
	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
					<h3 class="text-center text-success"> Register Here! </h3>
					<hr>
				</div>


				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="Username" name="uid" class="form-control">
							</div>
						</div>
					</div>
                </div>
                
                
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</div>
								<input type="text" class="form-control" name="mail" placeholder="E-Mail">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="password" minlength="8" maxlength="20" placeholder="Password" name="pwd" class="form-control">
							</div>
						</div>
					</div>
                </div>
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="password" minlength="8" maxlength="20" placeholder="Repeat password" name="pwd-repeat" class="form-control">
							</div>
						</div>
					</div>
				</div>




				
				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-warning btn-block" type="submit" name="signup-submit"> Signup </button>
					</div>
				</div>
			</div>
		</div>
	</div>


</form>
       </section>
    </main>


<?php

    require "footer.php";

?>