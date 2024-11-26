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
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="container">
    <form id="form1" method="post" action="insert_cart.php">
        <div class="row">
            <div class="col-md-24">
                <div class="ship">
                    <div class="info"><b>Shipping Information</b></div>
                </div><br>
                Name : <input type="text" name="cus_name" class="form-control" required placeholder="Name Surname"><!--บังคับกรอกข้อมูล-->
                Address : <textarea class="form-control" required placeholder="Address" name="cus_add" rows="3"></textarea>
                Phone Number : <input type="number" name="cus_tel" class="form-control" required placeholder="Phone Number">
                <br>
            </div>
            <div class="col-md-6">
             <a href="cart.php"><button type="button"class="btn btn-secondary">BACK</button></a>
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
