<?php
require_once "config.php";

$id = $_GET['orderID']; //get $id from an update link
$userquery = "DELETE FROM tb_order WHERE orderID = '$id'";
$result = mysqli_query($connect, $userquery);

if (!$result) {
    die("Could not successfully run the query $userquery" . mysqli_error($connect));
} else {
    echo "<script>alert('Successfully deleted the record'); window.location.href = 'view_order.php';</script>";
}
?>
