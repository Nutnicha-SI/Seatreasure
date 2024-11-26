<?php require_once"headeradmin.php"; ?>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="admin1.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</style>
</head>
<div class="update">
<?php
    require_once "config.php";

    $id  = $_GET['id']; 
    $userquery = "SELECT * from product where pro_id ='$id' ";
    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    </div>
    <div class="wrapper">
    <div class="alert alert-primary  text-center fw-bold"  role="alert" style="font-size: 20px;">
    Update User ! </div>
 
    
<body>
            <form   method="post" action="update_product_submit.php?id=<?php echo $id;?>">
    <div class="updatedata">
        <table  class="table table-dark table-striped">
                    <tr>
                        <td width="160">pro_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>pro_name</td>
                        <td><input type="text" name="pro_name" value="<?php echo $row['pro_name']; ?>"></td>
                    </tr>

                    <tr>
                        <td>detail</td>
                        <td><input type="text" name="detail" value="<?php echo $row['detail']; ?>"></td>
                    </tr>

                    <tr>
                    <td>type_id</td>  
                    <td><select class="form-select" name="type_id">
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
<tr>
                        <td>Price</td>
                        <td><input type="number" name="price" value="<?php echo $row['price']; ?>"></td>
                    </tr>
                        <td>Amount</td>
                        <td><input type="number" name="amount" value="<?php echo $row['amount']; ?>"></td>
                    </tr>

                    <tr>
                    <td align="right"><button type="submit" class="btn btn-primary">Submit</button></td>
                     <td><a href="show_update_product.php" type="button" class="btn btn-danger btn-lg">Back</a></button>
                    </tr>
                </table>
            </form>
        </div>
</body>
<?php
        }
    }
?>
</html>