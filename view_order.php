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
   View order Dashboard
</div
     <br>
        <div class="table-container">
            <table class="table table-dark table-striped">
                <tr>
                    <th>orderID</th>
                    <th>cus_name</th>
                    <th>address</th>
                    <th>Tel</th>
                    <th>total_price</th>
                    <th>reg_date</th>
                    <th>Delete</th>
                </tr>
                <?php
                $sql = "SELECT * FROM tb_order";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?=$row['orderID']?></td>
                    <td><?=$row['cus_name']?></td>
                    <td><?=$row['address']?></td>
                    <td><?=$row['telephone']?></td>
                    <td><?=$row['total_price']?></td>
                    <td><?=$row['reg_date']?></td>
                    <?php         
                    echo "<td><a href=\"delete_order.php?id=".$row['orderID']."\" type=\"button\" class=\"btn btn-danger\">Delete</a></td>";
             ?>
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
<?php

?>