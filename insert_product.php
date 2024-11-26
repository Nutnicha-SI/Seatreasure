<?php
require_once('config.php');
require_once("headeradmin.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pro_name = $_POST['pro_name'];
    $detail = $_POST['detail'];
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    // Upload photo
    
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "./image/".$new_image_name;
        move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
        } else {
        $new_image_name = "";
        }
    

    // Add data into table
    $sql = "INSERT INTO product(pro_name, detail, type_id, price, amount, image) 
            VALUES ('$pro_name', '$detail', '$type_id', '$price', '$amount', '$new_image_name')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='view_product.php';</script>";
    } else {
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
}
mysqli_close($connect);
?>