<?php
session_start();
include_once "config.php";
$userQuery1="SELECT *FROM systemuser as u inner join member as e on 
u.id = e.id WHERE username like '".$_POST['username']."'";

$result1=mysqli_query($connect ,$userQuery1);
if(!$result1) {
    die ("Could not successfully run the query 
$userQuery1".mysqli_error($connect));

?>
<div class="namehead">
<?php
}
if(mysqli_num_rows($result1) == 0) {
    $_SESSION['errors_msg'] = "Username or Password is incorrect.";
    header("Location: login.php");
} 
else{
    $row = mysqli_fetch_assoc($result1);
    if (($_POST['username']==$row['username'])
        && ($_POST['password']==$row['password']))
         {
            $_SESSION['username']=$row['username'];
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['lastname']=$row['lastname'];
            $_SESSION['level']=$row['level'];
            if( $_SESSION['level']=='2'){
            $show=header("Location: admin.php");
            }elseif ( $_SESSION['level']=='1'){
            $show=header("Location: home.php");
            } else  $show=header("Location: home.php");
            
           
        }
    else
    {
        $_SESSION['errors_msg']="Username or Password is incorrect.";
        header("Location: login.php");
    }

}

echo $show;
?>
</div>