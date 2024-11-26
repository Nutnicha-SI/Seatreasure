<body class="bodyshow">
<?php require_once"header.php"; 
require_once "config.php";
require_once"admin.php"; ?>
<div class="showdata">
<?php
$userquery= "SELECT * from tb_order ";
$result= mysqli_query($connect,$userquery);
?>
<div class="record">
<?php
echo "<a href=\"create_order.php\"><p>Add a new record</p></a><br><br>";
?>
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
    <th>pro_id</th>
    <th>pro_name</th>
    <th>detail</th>
    <th>type_id</th>
    <th>price</th>
    <th>amount</th>
    <th>image</th>
    <th>Delete</th>
    </tr>";
   
    {
    while ($row = mysqli_fetch_assoc($result)) 
    { 
        echo "<tr><td>".$row['orderID']."</td><td>"
        .$row['cus_name']."</td><td>"
        .$row['address']."</td><td>"
        .$row['telephone']."</td><td>"
        .$row['total_price']."</td><td>"
        .$row['reg_date']."</td><td>"
        ."<img src=\"img/".$row['file']."\" width=\"150px\">"
        ."</td>"
        //for update and delete
    
        ."<td><a href=\"delete_order.php?id=".$row['orderID']."\">"
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

