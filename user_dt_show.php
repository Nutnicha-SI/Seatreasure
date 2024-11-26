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
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
    <style>

       
    </style>
    <title>Admin</title>
</head>
<body>

    <div class="wrapper">
    <div class="table-container">
    <table  class="table table-dark table-striped">
    <tr>
    <th scope="col">Data</th>
    <th scope="col">Create</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
    <th scope="col">View</th>
     
    </tr>
    <tr>
      <th scope="col">User</th>
      <th scope="col"><a class="btn btn-success" href="user_dt_show.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="user_dt_show.php">Update</a></th>
      <th scope="col"><a class="btn btn-danger" href="user_dt_show.php">Delete</a></th>
      <th scope="col"><a class="btn btn-primary" href="user_dt_show.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Member</th>
      <th scope="col"><a class="btn btn-success" href="user_dt_show.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="user_dt_show.php">Update</a></th>
      <th scope="col"><a class="btn btn-danger" href="user_dt_show.php">Delete</a></th>
      <th scope="col"><a class="btn btn-primary" href="user_dt_show.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Product</th>
      <th scope="col"><a class="btn btn-success" href="user_dt_show.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="user_dt_show.php">Update</a></th>
      <th scope="col"><a class="btn btn-danger" href="user_dt_show.php">Delete</a></th>
      <th scope="col"><a class="btn btn-primary" href="user_dt_show.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Order</th>
      <th scope="col"><a class="btn btn-success" href="user_dt_show.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="user_dt_show.php">Update</a></th>
      <th scope="col"><a class="btn btn-danger" href="user_dt_show.php">Delete</a></th>
      <th scope="col"><a class="btn btn-primary" href="user_dt_show.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Orderdetail</th>
      <th scope="col"><a class="btn btn-success" href="user_dt_show.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="user_dt_show.php">Update</a></th>
      <th scope="col"><a class="btn btn-danger" href="user_dt_show.php">Delete</a></th>
      <th scope="col"><a class="btn btn-primary" href="user_dt_show.php">View</a></th>
      
    </tr>
    <tr>
      <th scope="col">Invoice</th>
      <th scope="col"><a class="btn btn-success" href="user_dt_show.php">Create</a></th>
      <th scope="col"><a class="btn btn-warning" href="user_dt_show.php">Update</a></th>
      <th scope="col"><a class="btn btn-danger" href="user_dt_show.php">Delete</a></th>
      <th scope="col"><a class="btn btn-primary" href="user_dt_show.php">View</a></th>
      
    </tr>
   
</div>
</div>
</table>
</body>
</html>
