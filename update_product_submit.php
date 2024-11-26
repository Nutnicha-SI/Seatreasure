<?php
require_once "config.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_GET['id'];
    $pro_name = $_POST['pro_name'];
    $detail = $_POST['detail'];
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    // Prepare and execute the update query
    $userquery = "UPDATE product 
                    SET pro_name = '$pro_name', 
                        detail = '$detail', 
                        type_id = '$type_id', 
                        price = '$price', 
                        amount = '$amount' 
                    WHERE pro_id = '$id'";

    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        // Redirect to the page where you want to display the updated product data
        header("Location: view_product.php");
        exit();
    }
} else {
    // If the form is not submitted, redirect to an error page or handle it accordingly
    header("Location: error.php");
    exit();
}
?>
