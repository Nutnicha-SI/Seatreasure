<?php require_once "headeradmin.php"; ?>
<html>
<head>
    <style>
        body {
            background-color:#FAFCF1;
        }
        .updatedata a {
            text-align: center;
            text-decoration: none;
            color: #638A55;
        }
        .updatedata a p {
            text-align: center;
            font-size:x-large;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
<div class="updatedata">
    <?php
    require_once "config.php";

    // Check if Employee_id is set in $_GET
    if(isset($_GET['Employee_id'])) {
        $Employee_id = $_GET['Employee_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $position = $_POST['position'];
        $level = $_POST['level'];

        // Update query with proper syntax
        $userquery = "UPDATE employee SET firstname = '$firstname',
                                       lastname ='$lastname',
                                       position ='$position',
                                       level ='$level'
                                    WHERE Employee_id  = '$Employee_id'";

        $result = mysqli_query($connect, $userquery);
        if (!$result) {
            die("Could not successfully run the query $userquery" . mysqli_error($connect));
        } else {
            // Redirect to admin page after successful update
            echo "<script>
                    alert('Success! Record updated.');
                    window.location.href = 'view_employee.php';
                  </script>";
        }
    } else {
        // Handle case when Employee_id is not set in $_GET
        echo "Employee_id is not provided.";
    }
    ?>
    </div>
</div>
</body>
</html>
