<?php
session_start();
require_once('config.php');
require_once("header.php");

$cusName=$_POST['cus_name'];
$cusAddress=$_POST['cus_add'];
$cusTel=$_POST['cus_tel'];

$sql="insert into tb_order(cus_name,address,telephone,total_price)
values('$cusName','$cusAddress','$cusTel','" . $_SESSION["sum_price"]. "')";
mysqli_query($connect,$sql);

$orderID = mysqli_insert_id($connect);
$_SESSION["order_id"] = $orderID;

for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){ //check วนลูป
    if(($_SESSION["strProductID"][$i]) !=""){ //check ถ้า id ไม่เท่ากับค่าว่างจะดึงข้อมูลสินค้าออกมา

        $sql1="select * from product where pro_id ='" .$_SESSION["strProductID"][$i] ."' ";
        $result1=mysqli_query($connect,$sql1);
        $row1=mysqli_fetch_array($result1);
        $price = $row1['price'];
        $total= $_SESSION["strQty"][$i] * $price;

        $sql2="insert into order_detail(orderID,pro_id,orderPrice,orderQty,Total)
        values('$orderID','" . $_SESSION["strProductID"][$i] . "','$price',
        '" . $_SESSION["strQty"][$i] ."','$total')" ;
        if(mysqli_query($connect,$sql2)){
            //ตัดสต็อกสินค้า
            $sql3 ="update product set amount= amount - '" . $_SESSION["strQty"][$i] . "'
            where pro_id='" . $_SESSION["strProductID"][$i] . "'";
            mysqli_query($connect,$sql3);
            
            echo "<script>window.location='print_saleorder.php';</script>";
            }

    }

}

mysqli_close($connect);
unset($_SESSION["intLine"]);
unset($_SESSION["strProductID"]);
unset($_SESSION["strQty"]);
unset($_SESSION["sum_price"]);

?>