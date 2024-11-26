<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body style="background-color:#FDFAF2;" class="bodys">
<?php require_once"headerad.php"; ?>
<?php
require_once "config.php";
require_once "signupadmin.php";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$position=$_POST['position'];
$id=$_POST['Employee_id'];

$userquery="INSERT INTO employee(firstname,lastname,level,position) 
value('$firstname','$lastname','$level','$position')";
$result=mysqli_query($connect,$userquery);

$userquery1="INSERT INTO systemuser(username,password,level,id) 
value('$username','$password','$level','$id')";
$result1=mysqli_query($connect,$userquery1);
?>
<div class="backlogin">
<?php
if(!$result1)
{
die("Could not successfully run the query $userquery1".mysqli_error($connect));
}
else
{
//echo "<br><a href = \"login.php\"><p>Go back to login click here !</p></a>";
echo '<script>alert("Registration successful! Click OK to go back to login page."); window.location.href = "admin.php";</script>';
}
?>

</div>
<div class="alert alert-dark" role="alert">
Click here <a href="login.php" class="alert-link">to login</a>.
</div>
</body>
</html>

?>

