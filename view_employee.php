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
   View Employee Dashboard
</div
     <br>
        <div class="table-container">
            <table class="table table-dark table-striped">
                <tr>
                    <th>Employee_id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Position</th>
                    <th>Level</th>
                    
                </tr>
                <?php
                $sql = "SELECT * FROM employee";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?=$row['Employee_id']?></td>
                    <td><?=$row['firstname']?></td>
                    <td><?=$row['lastname']?></td>
                    <td><?=$row['position']?></td>
                    <td><?=$row['level']?></td>
                <?php
                }
                mysqli_close($connect);
                ?>
            </table>
        </div>
<div class="alert alert-primary" role="alert">
 Back to adminpage <a href="signup_update.php" class="alert-link">Click here</a>. .
</div>
    </div>
</body>
</html>
