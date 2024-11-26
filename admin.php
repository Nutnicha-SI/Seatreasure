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
    <style>
        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .alert {
            width: 100%;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }
    </style>
    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
    <div class="alert alert-light text-center fw-bold"  role="alert" style="font-size: 24px;" style="color: goldenrod;">
    WELCOME TO ADMIN PAGE!
</div>

    <div class="table-container">
    <table  class="table table-dark table-striped">
    <tr>
    <th scope="col">Data</th>
    <th scope="col">Create</th>
    <th scope="col">Update</th>
    <th scope="col">View</th>
     
    </tr>
    <tr>
      <th scope="col">User</th>
      <th scope="col"><a class="btn btn-success" href="employeemain.php">Create</a></th>
      <th><a class='btn btn-warning' href="show_update_sys.php">Update</a></th>
      <th scope="col"><a class="btn btn-primary" href="view_user.php">View</a></th>
      
    </tr>
    
    <tr>
      <th scope="col">Member</th>
      <th scope="col"><a class="btn btn-success" href="employeemain.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="show_update.php">Update</a></th>
      <th scope="col"><a class="btn btn-primary" href="view_member.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Employee</th>
      <th scope="col"><a class="btn btn-success" href="signupadmin.php">Create</a></th>
      <th><a class='btn btn-warning' href="signup_update.php">Update</a></th>
      <th scope="col"><a class="btn btn-primary" href="view_employee.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Product</th>
      <th scope="col"><a class="btn btn-success" href="create_product.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="show_update_product.php">Update</a></th>
      <th scope="col"><a class="btn btn-primary" href="view_product.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Order</th>
      <th scope="col"><a class="btn btn-success" href="show_product.php">Create</a></th>
      <th></th>
      <th scope="col"><a class="btn btn-primary" href="view_order.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Orderdetail</th>
      <th scope="col"></th>
      <th></th>
      <th scope="col"><a class="btn btn-primary" href="view_orderdetail.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Sale order</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><a class="btn btn-primary" href="view_invoice.php">View</a></th>
      
</tr>
    <tr>
      <th scope="col">Cost of Selling</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><a class="btn btn-primary" href="view_product_detail.php">View</a></th>
      
</tr>
   
</div>
</div>
</table>
</body>
</html>

</div>

</body>
</html>

