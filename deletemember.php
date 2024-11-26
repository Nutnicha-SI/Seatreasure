
<?php require_once"header.php"; ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
    </head>
    <body>
<div class="deletemember">
<?php
require_once "config.php";

$id =$_GET['id']; //get $id from an update link

$userquery = "DELETE from member where id = '$id'";
$result = mysqli_query($connect,$userquery);
if (!$result) {
    die("Could not successfully run the query $userquery" . mysqli_error($connect));
} else {
    // Redirect to admin page after successful update
    echo "<script>
            alert('Success! Record updated.');
            window.location.href = 'show_update.php';
          </script>";
}
?>
 
</body>
</html>