<?php
require_once('config.php');
require_once("headeradmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper"> 
    <div class="alert alert-light text-center fw-bold"  role="alert" style="font-size: 24px;" style="color: goldenrod;">
   View order detail Dashboard
</div
     <br>
        <div class="table-container">
            <table class="table table-dark table-striped">
                <tr>
                    <th>id</th>
                    <th>orderID</th>
                    <th>pro_id</th>
                    <th>orderPrice</th>
                    <th>orderQty</th>
                    <th>Total</th>
                </tr>
                <?php
                $sql = "SELECT * FROM order_detail";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['orderID']?></td>
                    <td><?=$row['pro_id']?></td>
                    <td><?=$row['orderPrice']?></td>
                    <td><?=$row['orderQty']?></td>
                    <td><?=$row['Total']?></td>
                              
                <?php
                }
                mysqli_close($connect);
                ?>
            </table>
        </div>
<div class="alert alert-primary" role="alert">
 Back to adminpage <a href="admin.php" class="alert-link">Click here</a>. .
</div>
    </div>
</body>
</html>
            