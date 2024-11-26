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

    $user_id = $_GET['id']; //get $id from an update link
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $userquery = "UPDATE systemuser SET username = '$username',
                                   password ='$password',
                                   level ='$level'
                                WHERE user_id = '$user_id'";

    $result = mysqli_query($connect, $userquery);
    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        // Redirect to admin page after successful update
        echo "<script>
                alert('Success! Record updated.');
                window.location.href = 'view_user.php';
              </script>";
    }
    ?>
    </div>
</div>
</body>
</html>
