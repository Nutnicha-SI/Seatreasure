<?php require_once"header.php"; ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
    </head>
    <body>
    <div class="updatedata">
<?php
//session_start();
require_once "config.php";

 $id= $_GET['id']; //get $id from an update link
 $pro_name = $_POST['pro_name'];
 $detail =$_POST['detail'];
 $type_id=$_POST['type_id'];
 $price=$_POST['price'];
 $amount=$_POST['amount'];
 $image=$_POST['img'];


 $userquery = " UPDATE prodyct SET  pro_name = '$pro_name',
                                   detail ='$detail',
                                    type_id ='$type_id',
                                    price ='$price',
                                    amount ='$amount',
                                    image ='$image' 

                                
                                where id = '$id'";

$result = mysqli_query($connect,$userquery);
if(!$result)
{
    die("Could not successfully run the query $userquery".mysqli_error($connect));
}
else
{

   // echo "<a href=\"show_update.php\"><p>Go back to display all information</p></a>";
}

?>
<div class="wrapper">
<div class="alert alert-primary" role="alert">
  Sucess record <a href="view_productphp" class="alert-link">Click Here</a>.for back to admin page.
</div>
</div>    
</body>
</html>