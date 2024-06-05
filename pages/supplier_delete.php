
<?php
//including the database connection file
include '../config/dbconn.php';


$id = $_GET['supp_id'];
//deleting the row from table

$result = mysqli_query($dbconn, "DELETE FROM supplier WHERE supp_id=$id");

header("Location:show_supplier.php");
?>
    