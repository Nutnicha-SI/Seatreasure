<?php
require_once "config.php";
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$employee=$_POST['employee'];

$userquery="INSERT INTO 
systemuser(firstname,lastname,salary) 
value('$firstname','$lastname','$salary')";
$result=mysqli_query($connect,$userquery);
if(!$result)
{
   die("Could not successfully run the query $userquery".mysqli_error($connect));
}
else
{
   echo "Successfully";
   echo "<br><a href = \"show_update.php\">Go back to display </a>";
}
?>