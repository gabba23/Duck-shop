<?php
require_once("../includes/dbh.inc.php");


function display_orders()
{

    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {

        echo ' <tr> 
                        <td> ' . $row['OrderID'] . ' </td>
                        <td> ' . $row['UserID'] . ' </td>
                        <td> ' . $row['TotalPrice'] . ' </td>
                        <td> ' . $row['OrderDate'] . ' </td>
                       
                    </tr>' ;



    }
}