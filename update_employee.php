<?php require_once "headeradmin.php"; ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="update">
        <?php
            require_once "config.php";

            // Check if the Employee_id is set in the URL
            if(isset($_GET['Employee_id'])) {
                $Employee_id = $_GET['Employee_id']; 
                $userquery = "SELECT * from employee where Employee_id ='$Employee_id' ";
                $result = mysqli_query($connect, $userquery);

                if (!$result) {
                    die("Could not successfully run the query $userquery" . mysqli_error($connect));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="wrapper">
                <div class="alert alert-primary text-center fw-bold" role="alert" style="font-size: 20px;">
                    Update User!
                </div>
                <form method="post" action="signup_update1.php?Employee_id=<?php echo $Employee_id; ?>">
                    <table class="table table-dark table-striped">
                        <tr>
                            <td width="160">Employee_id</td>
                            <td width="246">Auto_Increment</td>
                        </tr>
                        <tr>
                            <td>Firstname</td>
                            <td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Lastname</td>
                            <td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
                        </tr>
                        <tr>
                            <td>level</td>
                            <td><input type="text" name="level" value="<?php echo $row['level']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td><input type="text" name="position" value="<?php echo $row['position']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="right"><button type="submit" class="btn btn-primary">Submit</button></td>
                            <td><a href="signup_update.php" type="button" class="btn btn-danger btn-lg">Back</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        <?php
                    }
                }
            } else {
                // Handle the case when Employee_id is not provided in the URL
                echo "Employee_id is not provided.";
            }
        ?>
    </div>
</body>
</html>
