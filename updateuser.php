<?php require_once"headeradmin.php"; ?>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="admin1.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</style>
</head>
<div class="update">
<?php
    require_once "config.php";

    $id  = $_GET['id']; 
    $userquery = "SELECT * from systemuser where user_id ='$id' ";
    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    </div>
    <div class="wrapper">
    <div class="alert alert-primary  text-center fw-bold"  role="alert" style="font-size: 20px;">
    Update User ! </div>
 
    
<body>
            <form   method="post" action="update_data_submit.php?id=<?php echo $id;?>">
    <div class="updatedata">
        <table  class="table table-dark table-striped">
                    <tr>
                        <td width="160">user_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>username</td>
                        <td><input type="text" name="firstname" value="<?php echo $row['username']; ?>"></td>
                    </tr>

                    <tr>
                        <td>p</td>
                        <td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
                    </tr>
                    

                    <tr>
                        <td>email</td>
                        <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>

                    <tr>
                    <td align="right"><button type="submit" class="btn btn-primary">Submit</button></td>
                     <td><a href="show_update_sys.php" type="button" class="btn btn-danger btn-lg">Back</a></button>
                    </tr>
                </table>
            </form>
        </div>
</body>
<?php
        }
    }
?>
</html>