<?php
require_once "config.php";

// Check if ID parameter is provided in the URL
if(isset($_GET['Employee_id']) && !empty($_GET['Employee_id'])) {
    $Employee_id = $_GET['Employee_id'];

    // Perform deletion query
    $delete_query = "DELETE FROM  employee WHERE Employee_id = $Employee_id";
    $result = mysqli_query($connect, $delete_query);

    if($result) {
        // Deletion successful
        echo '<script>alert("ลบข้อมูลสำเร็จ");</script>';
    } else {
        // Deletion failed
        echo '<script>alert("ลบข้อมูลไม่สำเร็จ");</script>';
    }

    // Redirect back to the admin page after deletion
    echo '<script>window.location.href = "signup_update.php";</script>';
} else {
    // If ID parameter is not provided, redirect back to the admin page
    header("Location: signup_update.php");
}

mysqli_close($connect);
?>
