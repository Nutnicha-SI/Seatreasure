<?php require_once("headerhome.php");?>
<?php require_once("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!--Bootsrap css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- main css-->
    <link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body class="showproduct">

<div class="container"> <br><br>
<div class="row"> 
    
<div class="col-md-12">
    <div class="text-center">
</div>
</div>

    <?php
$sql ="SELECT * FROM product ORDER BY pro_id ASC";
$result = mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){
    ?>
 

    <!-- แสดงผล 3 col -->
    <div class="col-md-4">
        <div class="text-center">
      <div class="pro">
      <img src="img/<?=$row['image']?>"><br>
      <h5><?=$row['pro_name']?></h5>
      <h6><?=$row['price']?> Baht </h6>
      <!--ดึง id สินค้าไปหน้าอื่นด้วย-->
      <p align="center"><a class="btn btn-outline-secondary " href="sh_product_detail.php?id=<?=$row['pro_id']?>">Detail</a>   
        </div>
        <br>
    </div>
</div>

    <?php
    }
    mysqli_close($connect);
    ?>
    
  </div>
</div>


</body>
</html>