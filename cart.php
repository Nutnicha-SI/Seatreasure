<?php
session_start();
require_once('config.php');
require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!--Bootsrap css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form id="form1" method="post" action="insert_cart.php">
            <div class="row">
                <div class="order"><b>Order</b></div>
                
                <div class="col-md-12">
                    <div class="tab">
                    <table class="table table-hover">
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th></th>
                            <th>Delete</th>
                        </tr>
                        <br> 
<?php
$total =0;
$sumprice =0;
$m = 1;
$discount =0;
$totalsum = 0;



for ($i=0; $i <= (int)$_SESSION['intLine'] ; $i++){
    if(($_SESSION["strProductID"][$i]) !=""){
        $sql1="SELECT * FROM product WHERE pro_id=' " .$_SESSION["strProductID"][$i] ."' ";
        $result1= mysqli_query($connect,$sql1);
        $row_pro = mysqli_fetch_array($result1);

        $_SESSION['price']= $row_pro['price'];
        $total= $_SESSION['strQty'][$i];
        $sum = $total * $row_pro['price'];
        $sumprice +=  $sum;
        $_SESSION['sum_price']=$totalsum ;    
        //echo "$sumprice";
       if ($_SESSION['level'] == 3) {
        if ($sumprice >= 10000) {
            $discount = $sumprice * 0.15;
        } else {
            $discount = $sumprice * 0.05; // Apply a 5% discount 
        }
        $_SESSION["discount_applied"] = true;
    } elseif ( $sumprice >= 10000) {
        $discount = $sumprice * 0.10;
        $_SESSION["discount_applied"] = true;
    }
$totalsum = $sumprice - $discount;
?>
                    
                        <tr>
                            <td><?=$m?></td>
                            <td>
                                <img src="img/<?=$row_pro['image']?>" width="80">  - <?=$row_pro['pro_name']?>
                            </td>
                            <td><?=$row_pro['price']?></td>
                            <td><?=$_SESSION["strQty"][$i]?></td>
                            <td><?=$sum?></td>
                            <td>
                                <div class="pluss">
                                <a href="order.php?id=<?=$row_pro['pro_id']?>" class="btn btn-outline-secondary">+</a>
                                <!--ไม่ให้กดปุ่มลบถ้าของในตะกร้าน้อยกว่า 1 -->
                                <?php
                                if($_SESSION["strQty"][$i] > 1){  ?>
                                <a href="order_del.php?id=<?=$row_pro['pro_id']?>" class="btn btn-outline-secondary">-</a>
                                <?php  }   ?>
                                </div>
                            </td>
                            <td><a href="pro_delete.php?Line=<?=$i?>" class="btn btn-outline-danger">Remove </a></td>
                        </tr>
                        
<?php
$m=$m+1;
}
}
?>
            <tr>
         
            <td class="text-end" colspan="4"><b>Discount</b></td>
            <td class="text-center"><?=$discount?></td>
            <td>Baht</td>
</tr>
            <tr>
            <td class="text-end" colspan="4"><b>Total Price</b></td>
            <td class="text-center"><?=$sumprice?></td>
            <td>Baht</td>
</tr>

                    </table>
</div>

                    <div style="text-align:right">
                    <a href="show_product.php"><button type="button" class="btn btn-outline-success">Add Product</button></a>
                    <a href="delivery_information.php"><button type="button" class="btn btn-outline-primary">NEXT</button></a><br><br>
                    </div>
                </div>
</div>
                
</div>

            </div>
        </form>
    </div>





</body>
</html>