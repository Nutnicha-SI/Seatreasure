<?php
require_once('config.php');
require_once("headeradmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin1.css">
</head>
<body>
    <form method="post" action="insert_product.php">
    <div class="wrapper">
    <div class="alert alert-primary  text-center fw-bold"  role="alert" style="font-size: 20px;">
    Add Product !
</div>
<label>Product name :</label> <br>
    <input type="text" name="pro_name" class="form-control" placeholder="Productname" required><i class='bx bxs-user'></i>
    <br>
    
    <label>Product detail :</label> <br>      
        <input type="text" name="detail"  class="form-control" placeholder="Detail"required><i class='bx bxs-user'></i>
        <br>
   
        <label>Type_id </label>
        <select class="form-select" name="type_id">
    <?php
    $sql="SELECT * FROM type ORDER BY type_name";
    $hand = mysqli_query($connect,$sql);
    while($row=mysqli_fetch_array($hand)){
    ?>
    <label>Type_id :</label> <br>
    <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
    <?php
    }
    mysqli_close($connect);
    ?>
</select> <!-- Add this closing tag -->

        <br>
        <label>Product Price : </label>
        <input type="number" name="price"  class="form-control" placeholder="Price"required><i class='bx bxs-user'></i>
    <br>
    <label>Amount : </label>
       
        <input type="number" name="amount"  class="form-control" placeholder="Amount"required><i class='bx bxs-user'></i>
  <br>
    <div class="">
        <label>Image :</label><br>
        <input type="file" name="file1"><i class='bx bxs-user'></i></div>
         <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="admin.php" type=button class="btn btn-secondary">Cancel</a>
        <br>
    </div></div>
    </form>
</body>
</html>