<?php require_once("headeradmin.php");
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin1.css">

    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
        <div class="table-container">
            <div class="alert alert-light text-center fw-bold" role="alert" style="font-size: 24px; color: goldenrod;">
                View product page <br>
                <a href="admin.php">Back to admin page</a>
            </div>
            <table class="table table-dark table-striped">
                <tr>
                    <th scope="col">Pro_id</th>
                    <th scope="col">Product_name</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Type_id</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Image</th>
                </tr>
        
                <?php
         $sql = "SELECT * FROM product";
         $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?=$row['pro_id']?></td>
                        <td><?=$row['pro_name']?></td>
                        <td><?=$row['detail']?></td>
                        <td><?=$row['type_id']?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['amount']?></td>
                        <td><img src="img/<?=$row['image']?>" width="300px" /></td>
                    </tr>
                    <?php
                }
                mysqli_close($connect);
                ?>
            </table>
            <div class="alert alert-primary" role="alert">
 Back to adminpage <a href="admin.php" class="alert-link">Click here</a>. .
</div>
        </div>
    </div>
</body>
</html>
