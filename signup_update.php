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
<div class="showdata">
<?php require_once"admin.php"; 
require_once "config.php"; ?>
<?php
$userquery= "SELECT * from employee";
$result= mysqli_query($connect,$userquery);
?>

<div class="table">
<?php 
if(!$result){
    die("Could not successfully run the query $userquery".mysqli_error($connect) );
}
if(mysqli_num_rows($result)==0)
{
   //echo "No record were found with query $userquery";
}
else
{
    echo"<table class=\"table table-dark table-striped\"><tr>
    <div class=\"alert alert-primary\" role=\"alert\">
    Update and Delete Data !
    </div>
    <td>firstname</td>
    <td>lastname</td>
    <td>level</td>
    <td>Position</td>
    <td>Update</td>
    <td>Delete</td>
    </tr>";
    {
    while ($row = mysqli_fetch_assoc($result)) 
    { 
    echo "<tr><td>".$row['firstname']."</td><td>"
        .$row['lastname']."</td><td>"
        .$row['level']."</td><td>"
        .$row['position']."</td>";
    //for update and delete
    echo "<td><a href=\"update_employee.php?Employee_id=".$row['Employee_id']."\" type=\"button\" class=\"btn btn-warning\">Update</a></td>";
    echo "<td><a href=\"delete_employee.php?Employee_id=".$row['Employee_id']."\" type=\"button\" class=\"btn btn-danger\">Delete</a></td>";
    }
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
</body>
</html>
<?php require_once"footer.php"; ?>
