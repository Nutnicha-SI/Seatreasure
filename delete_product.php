<?php
require_once "config.php";

$id = $_GET['id']; //get $id from an update link
$userquery = "DELETE FROM product WHERE pro_id = '$id'";
$result = mysqli_query($connect, $userquery);

if (!$result) {
    die("Could not successfully run the query $userquery" . mysqli_error($connect));
} else {
    echo "<script>alert('Successfully deleted the record'); window.location.href = 'show_update_product.php';</script>";
}
?>
