<?php 
session_start();
require_once("config.php");
$sql="select * from tb_order  where orderID= '" . $_SESSION['order_id'] . "' ";
$result = mysqli_query($connect,$sql,);
$rs=mysqli_fetch_array($result);
$total_price = $rs['total_price'];
$reg_date= $rs['reg_date'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <!--Bootsrap css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        .invoice-table{
            width: 100%;
            border-collapse: collapse;
            border: 2px solid white;
        }
        .invoice-table th {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            border: 2px solid white;
        }
        .invoice-table th:nth-child(1) {
            text-align: left;
            border: 2px solid white;
        }
        .invoice-table th:nth-child(2) {
            text-align: left;
            border: 2px solid white;
        }
        .underline {
            text-decoration: underline; 
        }
        .invoice-table-tshow{
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        }
        .invoice-table-tshow th {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            border: 2px solid black;
        }
        .invoice-table-tshow th:nth-child(1) {
            text-align: left;
            border: 2px solid black;
        }
        .invoice-table-tshow th:nth-child(2) {
            text-align: left;
            border: 2px solid blac;
        }
   
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="success">
        <table class="invoice-table">
            <tr col-md-12>
            
            <th colspan="2" style="text-align: right;"><h3><b>Invoice</b></h3></th>
        </tr>
            <tr>
            <td><h3><b>Seatreasure</b></h3><br>
            159 Selfish Road , Soi julumlum 77 <br>
            Bang wan , Phuket 92000 <hr></hr>
            </td>
            <hr></hr>
            </tr>
        </table>

        <table class="invoice-table">
            <tr col-md-12>
            <th colspan="2"><h6><b>Bill to :</b><br> 
            Name : <?=$rs['cus_name']?><br>
            Address : <?=$rs['address']?><br>
            Phone No : <?=$rs['telephone']?></h6></th>
            
            <th ><h6><b>Ship to :</b><br>
            Name : <?=$rs['cus_name']?><br>
            Address : <?=$rs['address']?><br>
            Phone No : <?=$rs['telephone']?></h6></th> 
            
          
            <th ><h6><b>Invoice No : </b><?=$rs['orderID']?><br> 
            <b>Invoice Date :</b> <?=$rs['reg_date']?><br>
            <b>P.O. Date:</b> <?=$rs['reg_date']?><br>
            <?php $due_date = date('Y-m-d', strtotime($reg_date . ' +30 days')); ?>
            <b>Due Date :</b> <?=$due_date?>
            <th></th>
        </tr>
        
        </table>
        <br>
        <table class="invoice-table-tshow">
            <tr>
                <th>Quantity</th>
                <th>Description</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
            <br>
            <?php
            $total =0;
            $sumprice =0;
            $discount =0;
            $subtotal=0;
            if ($_SESSION['level'] == 3) {
                if ($total_price >= 10000) {
                    $discount = $total_price * 0.15;
                } else {
                    $discount = $total_price * 0.05; // Apply a 5% discount 
                }
              
            } elseif ( $total_price >= 10000) {
                $discount = $total_price * 0.10;
               
            }
            $totalsum = $subtotal - $discount;
           
    // นำเข้าไฟล์ config.php และเรียกใช้ session_start() ตรงนี้หากยังไม่ได้ทำ
   
    $sql_products = "SELECT od.orderQty, p.pro_name, od.orderPrice, od.Total
    FROM order_detail od
    INNER JOIN product p ON od.pro_id = p.pro_id
    WHERE od.orderID = '" . $_SESSION['order_id'] . "'";
    $concat = "SELECT CONCAT('Total') FROM 'order_detail'
    where = orderID ";
    $result_products = mysqli_query($connect, $sql_products);
    while ($row_product = mysqli_fetch_array($result_products)) {
        $subtotal += $row_product['Total'];
            $total =0;
            $sumprice =0;
            $discount =0;

            if ($_SESSION['level'] == 3) {
                if ($subtotal >= 10000) {
                    $discount = $subtotal * 0.15;
                } else {
                    $discount = $subtotal * 0.05; // Apply a 5% discount 
                }
              
            } elseif ( $subtotal >= 10000) {
                $discount =$subtotal * 0.10;
               
            }
            $totalsum = $subtotal - $discount;
        ?>
        <tr>
            <td><?= $row_product['orderQty'] ?></td>
            <td><?= $row_product['pro_name'] ?></td>
            <td><?= $row_product['orderPrice'] ?></td>
            <td><?= $row_product['Total'] ?></td>  
        </tr>
    <?php }  ?>

    <table class="invoice-table-tshow-sale" >
    <tr>
    <!-- เพิ่มคอลัมน์ว่าง -->
    <th style="width: 10%;"></th>
    <th style="width: 20%;"></th>
    <td style="text-align: left; width: 10%;"><b>Subtotal:</b> <?= number_format($subtotal, 2) ?> Baht</td>
    <!-- เพิ่มคอลัมน์ว่าง -->
    <th style="width: 10%;"></th>
</tr>    <tr>
        <th></th>
        <!-- เพิ่มคอลัมน์ว่าง -->
        <th></th>

        <!-- ขยับคอลัมน์ Discount ไปทางขวา -->
        <td style="text-align: left;"><b>Discount:</b> <?= number_format($discount, 2) ?> Baht</td>
    </tr>
    <tr>
        <th></th>
        <!-- เพิ่มคอลัมน์ว่าง -->
        <th></th>

        <!-- ขยับคอลัมน์ Total Price ไปทางขวา -->
        <td style="text-align: left;"><b>Total Price: </b><?=number_format($totalsum,2)?> Baht</td>
    </tr>
</table>

        </tr>
            </tr>
        </table>
    </div>    

                        <a href="print_saleorder.php"><button type="button" class="btn btn-outline-secondary">Sale order</button></a>
                        <a href="home.php"><button type="button" class="btn btn-outline-secondary">back</button></a>

            </div></div>
        </div>
    </div>
    </div>
</body>
</html>
