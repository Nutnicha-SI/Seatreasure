
<?php require_once"header.php"; 
require_once "config.php";
require_once "admin.php"; ?>
<html >
<head>

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body class="bodyshow">
<div class="update">
<?php
    $id = $_GET['pro_id'];
    $userquery = " SELECT * from product where pro_id = '$id' ";
    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } 
    else {
        //echo "<h1>Update data<br><br></h1>";
        while ($row = mysqli_fetch_assoc($result)) {  
    ?>
    </div>
    
<body>
        <form   method="post" action="update_data_submit.php?id=<?php echo ['pro_id'];?>">
        <div class="alert alert-warning" role="alert">
  UPDATE DATA
</div>
    <table class="table table-dark table-striped">
                    <tr>
                        <td width="160">Pro_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>product_name</td>
                        <td><input type="int" name="id" value="<?php echo $row['pro_name']; ?>"></td>
                    </tr>

                    <tr>
                        <td>detail</td>
                        <td><input type="text" name="detail" value="<?php echo $row['detail']; ?>"></td>
                    </tr>

                    <tr>
                        <td width="160">type_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
                    </tr>
                    <tr>
                        <td>amount</td>
                        <td><input type="text" name="amount" value="<?php echo $row['amount']; ?>"></td>
                    </tr>
                   <!-- <tr>
                        <td>image</td>
                        <td><img src="img/<?=$row['image']?>" width="150px"></td>
                    </tr>
                    -->
                    <tr><th></th>
                    <th><button type="submit" href="view_product.php" class="btn btn-primary">Submit</button>
                    <button type="submit" href="view_product.php" class="btn btn-primary"></button>
                    </th>
                </table>
            </form>
        </div>
</body>
<?php
      }
    }
?>
</html>