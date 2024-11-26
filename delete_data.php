<?php
require_once "config.php";

// Check if ID parameter is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Perform deletion query
    $delete_query = "DELETE FROM systemuser WHERE id = $id";
    $result = mysqli_query($connect, $delete_query);

    if($result) {
        // Deletion successful
        echo '<script>alert("ลบข้อมูลสำเร็จ");</script>';
    } else {
        // Deletion failed
        echo '<script>alert("ลบข้อมูลไม่สำเร็จ");</script>';
    }

    // Redirect back to the admin page after deletion
    echo '<script>window.location.href = "show_update_sys.php";</script>';
} else {
    // If ID parameter is not provided, redirect back to the admin page
    header("Location: show_update_sys.php");
}

mysqli_close($connect);
?>
