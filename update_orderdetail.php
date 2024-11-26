<body class="bodyshow">
<?php require_once"header.php"; 
require_once "config.php";
require_once"admin.php"; ?>
<div class="showdata">
<?php
$userquery= "SELECT * from order_detail ";
$result= mysqli_query($connect,$userquery);
?>
<div class="record">
</div>
<div class="table">
<?php 
if(!$result){
    die("Could not successfully run the query $userquery".mysqli_error($connect) );
}
if(mysqli_num_rows($result)==0)
{
   echo "No record were found with query $userquery";
}
else
{
    echo "<table class='table table-dark table-striped'>";

    echo "<tr>
    <th>id</th>
    <th>orderID</th>
    <th>pro_id</th>
    <th>orderPrice</th>
    <th>orderQty</th>
    <th>Total</th>
    <th>Delete</th>
    </tr>";
   
    {
    while ($row = mysqli_fetch_assoc($result)) 
    { 
        echo "<tr><td>".$row['id']."</td><td>"
        .$row['orderID']."</td><td>"
        .$row['pro_id']."</td><td>"
        .$row['orderPrice']."</td><td>"
        .$row['orderQty']."</td><td>"
        .$row['Total']."</td>"
        //for update and delete
    
        ."<td><a href=\"delete_orderdetail.php?id=".$row['id']."\">"
        ."Delete</a></td></tr>";
    
    }
    }
    echo "</table>"; 
}
?>
</div>
<div class="backadmin1">
<?php
echo "<a href=\"admin.php\"><p>Back to admin homepage</p></a><br><br>";
mysqli_close($connect);
?> 
</div>
</body>
</html>
<?php require_once"footer.php"; ?>

