<?php require_once("headerad.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form | Dan Aleko</title>
<link rel="stylesheet" href="2.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title>Member</title>

</head>
<body>
    
    <!--<h1 style="color:#638A55;padding:0 0 0 200px;">Sign up</h1>-->
    <div class="wrapper">
    <form action="employee.php" method="post">
    <h1>Register</h1>
    <div class="input-box">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <i class='bx bxs-user'></i>
    </div>
    
    <div class="input-box">
        <input type="text" name="lastname" placeholder="Lastname" required>
        <i class='bx bxs-file'></i>
    </div>

    <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
        <i class='bx bxs-envelope'></i>
    </div>

    <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
    </div>
    
    <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
    </div>

    <div class="input-box">
        <input type="number" name="level" placeholder="Level" value="1" required>
        <i class='bx bxs-star'></i>
    </div>
    
    <div class="input-box">
        <input type="password" name="id" placeholder="Confrim password" required>
        <i class='bx bxs-lock-alt' ></i>
    </div>
    <div class="register-link">
        <p>Have an account? <a href="login.php">Login</a>
    <br></br>
        <input type="submit"  class="btn" value="Submit">
        <br></br>
        <input type="reset"   class="btn" value="Cancel">

</div>
</div>
</form>
</div>
</div>
</body>
</html>
<?/*php require_once"footer.php"; */?>

