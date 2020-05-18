
<?php
require "admin.php";

require '../includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript">


    </script>
</head>

<body>
<section class="text-center">
    <h3>This is a page for News</h3>
    <br>
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#newModal">Add news</button>
</section>

<?php



$sql = "SELECT NewsID, Article, PhotoNews, NewsDate FROM news";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>


<br>
<div class="col">
    <div class="row">


        <?php     foreach ($result as $things2) { ?>
            <div class="col-12 col-md-4 col-lg-2">
                <div class="card">
                    <img class="card-img-top" height="200px"
                         src="data:image/jpeg;base64,<?php echo base64_encode($things2['PhotoNews']); ?>"
                         alt="Card image cap">
                    <div class="card-body">

                        <h5>DATE: <?php
                            echo $things2["NewsDate"];
                            ?></h5>
                        <td><?php echo '<a href="deleteProduct.php?ProductID='.$things2['NewsID'].'"></a>' ?> </td>
                        </a></h4>
                        <p class="card-text">
                            <?php
                            echo $things2["Article"];
                            ?>
                        </p>
                        <div class="row">
                            <div class="col">
                                <btn class="btn btn-outline-danger"><a href="action/deleteProduct.php?id=<?php echo $things2['NewsID']; ?>">
                                        Delete</a></btn>
                            </div>
                            <div class="col">
                                <btn data-toggle="modal" data-target="#editModal" class="btn btn-outline-warning">Edit
                                </btn>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }?>


    </div>
</div>


<!-- ADD NEW PRODUCT MODAL -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New news</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="action/newnew.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Article</label> <br>

                        <textarea name="Article" id="" cols="80" rows="5" id="Article"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Date</label>
                        <input type="date" class="form-control" id="NewsDate" name="NewsDate"
                               placeholder="Awesome duck">
                    </div>
                    <
                    <input type="file" name="photo">
                    <button type="submit" name="submitit" value="submit" class="btn btn-primary">Save changes</button>
                </form>


            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
    </div>
</div>


</body>

</html>