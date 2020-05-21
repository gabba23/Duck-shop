<?php

require "header.php";
require "includes/dbh.inc.php";

?>



    <main>
        <div class="container">
            <div class="row profile">
                <div class="col-md-2">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo $_SESSION['userUid']; ?>
                            </div>
                        </div>

                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li >
                                    <a href="userprofile.php">
                                        <i class="glyphicon glyphicon-home"></i>
                                        Overview </a>
                                </li>
                                <li class="active">
                                    <a href="accountsettings.php">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Account Settings </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">
                        <h4>  Change your information here! </h4>


                        <form action="" method="POST">
                            <div class="form-row">


                                <div class="form-group col-md-6">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Street">Phone number</label>
                                <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="52 34 32 85">
                            </div>
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input type="text" class="form-control" id="Street" name="Street" placeholder="storegade 24">
                            </div>
                            <div class="form-group">
                                <label for="City">City</label>
                                <input type="text" class="form-control" id="City" name="City" placeholder="Esbjerg">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Country">Country</label>
                                    <input type="text" class="form-control" id="Country" name="Country" >
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary" name="update">Update information</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <?php
        require "includes/dbh.inc.php";


        if (isset($_POST['update'])) {
            $editID = $_SESSION['userId'];
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $PhoneNumber = $_POST['PhoneNumber'];
            $Street = $_POST['Street'];
            $City = $_POST['City'];
            $Country = $_POST['Country'];
            $sessions = $_SESSION['userId'];

            // $query = $conn->prepare("UPDATE users SET `FirstName`='$FirstName', `LastName`='$LastName', `PhoneNumber`='$PhoneNumber', `Street`='$Street', `City`='$City', 'Country'='$Country' WHERE id='$_SESSION[userId]'");
            $query = $conn->prepare("UPDATE Users SET `FirstName`='$FirstName', `LastName`='$LastName', `PhoneNumber`='$PhoneNumber', `Street`='$Street', `City`='$City', `Country`='$Country' WHERE UserID = $editID");
            $query->execute();


        }else {
            echo 'it no work sir';
        }
        ?>
    </main>




<?php

require "footer.php";

?>