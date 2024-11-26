<?php
require_once "config.php";

$id =$_GET['id']; //get $id from an update link

$userquery = "DELETE from systemuser where user_id = '$id'";
$result = mysqli_query($connect,$userquery);

if(!$result)
{
    die("Could not successfully run the query $userquery".mysqli_error($connect) );
}
else{
    echo "<a href=\"show_update_sys.php\"><p>Go back to display all information</p></a>";
}
?>
<div class="wrapper">
<div class="alert alert-primary" role="alert">
  Sucess record <a href="view_user.php" class="alert-link">Click Here</a>.for back to admin page.
</div>
</div>   