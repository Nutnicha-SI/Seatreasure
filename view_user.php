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
   View User Dashboard
</div
     <br>
        <div class="table-container">
            <table class="table table-dark table-striped">
                <tr>
                    <th>User_id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                $sql = "SELECT * FROM systemuser";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?=$row['user_id']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['password']?></td>
                    <td><?=$row['level']?></td>
                    <?php
                echo "<td><a href=\"user_ud.php?id=".$row['user_id']."\" type=\"button\" class=\"btn btn-warning\">Update</a></td>"; 

                echo "<td><a href=\"delete_data.php?id=".$row['id']."\" type=\"button\" class=\"btn btn-danger\">Delete</a></td>"; ?>

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
