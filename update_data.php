<?php require_once"headeradmin.php"; ?>
<html >
<head>
<link rel="stylesheet" type="text/css" href="admin1.css">

</head>
<body>
<div class="update">
<?php
    require_once "config.php";

    $id  = $_GET['id']; 
    $userquery = "SELECT * from member where id ='$id' ";
    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        echo "<h1>Update data<br><br></h1>";
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    </div>
    

    <form   method="post" action="update_data_submit.php?id=<?php echo $id;?>">
    <div class="updatedata">
                <table  class="table table-dark table-striped">
                    <tr>
                        <td width="160">member_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>firstname</td>
                        <td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>lastname</td>
                        <td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>email</td>
                        <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="right"><input type="submit" name="button" value="Submit"></td>
                        <td><input type="reset" value="Cancel"></td>
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