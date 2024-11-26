<?php require_once("header.php"); ?>
<?php 
require_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <!-- bootstrap-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- main css-->
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body class="sh_dt">
<div class="banner">
        <img width="1000px" height="auto" src="img/detail.gif">
    </div>
    <div class="container">
        <div class="row">
            <?php
            //รับค่า id
            $ids=$_GET['id'];
            // join
            $sql ="SELECT * FROM product , type WHERE product.type_id= type.type_id and product.pro_id='$ids'";
            $result = mysqli_query($connect,$sql);
            $row=mysqli_fetch_array($result);
            ?>
               
                <div class="col-md-4">
                <div class="imgfdt">
                <img src="img/<?=$row['image']?>" width=300px/>
                </div> </div>
                <div class="col-md-6">
                <div class="detail">
                    <h4><?=$row['pro_name']?> </h4>
                    <h6><?=$row['detail']?> <br><br>
                    Product type : <?=$row['type_name']?><br><br>
                    Price : <?=$row['price']?> Baht <br><br></h6>
                <a href="index.php"><button type="button" class="btn">Back</button></a>
                </div>
            </div>
</div>
            </div>
        </div>
        </div>
        </div>
        <div>

        <br>
<br>
<br>
<br>


</div>

<?php
mysqli_close($connect);
?>


</body>
</html>