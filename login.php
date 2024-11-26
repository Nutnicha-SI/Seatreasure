<?php require_once("headerad.php");?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="2.css">
    <title>loginpage</title>
    </head>
    <body> 
    <form action="check-login.php" method="post">
    <div class="wrapper">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
     </div> 
      
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="employeemain.php">Register</a></p>
      </div>
    </form>
</div>
        
    </body>
</html>