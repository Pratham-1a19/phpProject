<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Your Password</title>
  <link rel="stylesheet" href="../css/stylesForLogin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="./sendPassword.php" method="POST">
      <h1>Forgot Your Password</h1>
      <p>Enter your email address associated with your account and we will send you a 6 digit security code</p>
      <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
        <i class='bx bxs-user'></i>
      </div>
      <input type="submit" class="btn" value="Get my Password"></input>
      <div class="register-link">
        <p>Don't have an account? <a href="./signupForm.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
