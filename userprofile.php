<?php

require "header.php";
require "includes/dbh.inc.php";
?>



    <main>
        <div class="container">
            <div class="row profile">
                <div class="col-md-2">
                    <div class="profile-sidebar">
                        <div class="profile-userpic">
                            <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo $_SESSION['userUid']; ?>
                            </div>
                        </div>
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#">
                                        <i class="glyphicon glyphicon-home"></i>
                                        Overview </a>
                                </li>
                                <li>
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
                        <h4> Your user information </h4>

                        <div class="col-md-6">

                            <div class="table-responsive">
                                <table class="table table-condensed table-responsive table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                First Name
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['fnameId'] ;  ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                Last Name
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['lnameId']   ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                Email
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['emailId']   ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                Phone number
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['phoneId'] ;  ?>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                Street
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['streetId']   ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                City
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['cityId'] ;  ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="text-primary"></span>
                                                Country
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <?php echo $_SESSION['countryid']   ?>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
    </main>






<?php

require "footer.php";

?>