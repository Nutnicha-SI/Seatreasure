<?php require_once"admin.php";
require_once "config.php"; ?>
<html>
<head>
<head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="admin1.css">
  
</head>
<body class="bodyshow">

<div class="showdata">
<?php
$userquery= "SELECT * from member";
$result= mysqli_query($connect,$userquery);
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
    echo"<table class=\"table table-dark table-striped\"><tr>
    <div class=\"alert alert-primary\" role=\"alert\">
    Update and Delete Data !
    </div>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>";
   
    {
    while ($row = mysqli_fetch_assoc($result)) 
    { 
    echo "<tr><td>".$row['firstname']."</td><td>"
        .$row['lastname']."</td><td>"
        .$row['email']."</td>";
    //for update and delete
    echo "<td><a href=\"update_user.php?id=".$row['id']."\" type=\"button\" class=\"btn btn-warning\">Update</a></td>";
    echo "<td><a href=\"deletemember.php?id=".$row['id']."\" type=\"button\" class=\"btn btn-danger\">Delete</a></td>";
    }
    }
    echo "</table>"; 
}
?>
<div class="backadmin1">
<?php
echo "<a href=\"admin.php\" type=\"button\" class=\"btn btn-danger btn-lg\">Back</a>";
mysqli_close($connect);
?> 
</div>
</body>
</html>