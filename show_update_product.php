<html>
<head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="admin1.css">
        <style>
    .bodyshow{
    display: grid;
    place-items: center;
    height: 100vh; /* ตั้งความสูงเป็น 100vh เพื่อให้ครอบคลุม viewport ทั้งหมด */
    background: url(img/4.png) repeat;
    background-color: #000e17; /* เพิ่มสีพื้นหลังสีน้ำเงิน */
    background-size: 100vw 100vh;
    background-size: cover;
    background-position: center;
    color: white;
    margin: 0; /* ลบ margin ของ body เริ่มต้น */
}
        </style>
</head>
<body class="bodyshow">
<?php 
    require_once "admin.php";
    require_once "config.php";

    $userquery = "SELECT * FROM product";
    $result = mysqli_query($connect, $userquery);
?>
<div class="showdata">
    <div class="record"></div>
    <div class="table">
    <?php 
        if (!$result) {
            die("Could not successfully run the query $userquery" . mysqli_error($connect));
        }
        if (mysqli_num_rows($result) == 0) {
            echo "No records were found with query $userquery";
        } else  { 
            echo "<table class=\"table table-dark table-striped\">
                    <tr>
                        <th>pro_id</th>
                        <th>pro_name</th>
                        <th>detail</th>
                        <th>type_id</th>
                        <th>price</th>
                        <th>amount</th>
                        <th>image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) { 
                echo "<tr>
                        <td>".$row['pro_id']."</td>
                        <td>".$row['pro_name']."</td>
                        <td>".$row['detail']."</td>
                        <td>".$row['type_id']."</td>
                        <td>".$row['price']."</td>
                        <td>".$row['amount']."</td>
                        <td><img src=\"img/".$row['image']."\" width=\"150px\"></td>
                        <td><a href=\"update_product.php?id=".$row['pro_id']."\" type=\"button\" class=\"btn btn-warning\">Update</a></td>
                        <td><a href=\"delete_product.php?id=".$row['pro_id']."\" type=\"button\" class=\"btn btn-danger\">Delete</a></td>
                    </tr>";
            }
            echo "</table>"; 
        }
    ?>
    </div>
    <div class="backadmin1">
        <?php
            echo "<a href=\"admin.php\" type=\"button\" class=\"btn btn-danger btn-lg\">Back</a>";
            mysqli_close($connect);
        ?> 
    </div>
</div>
<?php require_once "footer.php"; ?>
</body>
</html>
