<?php require_once"headeradmin.php"; ?>
<html >
<head>
<link rel="stylesheet" type="text/css" href="admin1.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<div class="update">
<?php
    require_once "config.php";

    $user_id  = $_GET['id']; 
    $userquery = "SELECT * from systemuser where user_id ='$user_id' ";
    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        echo "<h1>Update data<br><br></h1>";
        while ($row = mysqli_fetch_assoc($result)) {
?>

            <form   method="post" action="updatedata_sys_submit.php?id=<?php echo $user_id;?>">
                <table class= "table-dark table-striped">
                    <tr>
                        <td width="160">user_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>username</td>
                        <td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
                    </tr>

                    <tr>
                        <td>password</td>
                        <td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
                    </tr>

                    <tr>
                        <td>level</td>
                        <td><input type="text" name="level" value="<?php echo $row['level']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="right"><input type="submit" name="button" value="Submit"></td>
                        <td><input type="reset" value="Cancel"></td>
                    </tr>
                </table>
            </form>
</body>
<?php
        }
    }
?>

</html>