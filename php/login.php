<?php 
  if(isset($_COOKIE["Email"]) && isset($_COOKIE["Password"])) {
    header("location:/PHP-Project/php/home.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/sv.png" type="image/png">
  <title>Login</title>
  <link rel="stylesheet" href="../css/stylesForLogin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="./sendLogin.php" method="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="./forgotPassword.php">Forgot Password</a>
      </div>
      <input type="submit" class="btn" value="Login"></input>
      <div class="register-link">
        <p>Don't have an account? <a href="./signupForm.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
