<?php 
  if(isset($_COOKIE["Email"]) && isset($_COOKIE["Password"])) {
    header("location:/PHP-Project/public/index.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/sv.png" type="image/png">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../css/stylesForSignup.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
  <div class="wrapper">
    <form action="./signup.php" onsubmit="return validateForm()" method="POST">
      <h1>Sign Up</h1>
      <div class="input-box">
        <input type="text" name="name" id="name" placeholder="Name" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
        <i class='bx bx-envelope'></i>
      </div>
      <div class="input-box">
        <input type="date" name="date" placeholder="Date Of Birth" required id="date">
        <i class='bx bxs-calendar'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
    
      <input type="submit" class="btn" value="Submit">
      <div class="register-link">
        <p>Already have an account? <a href="./login.php">Login</a></p>
      </div>
    </form>
  </div>
  <script src="../js/script.js"></script>
</body>
<script>
let password = document.getElementById('password');
let cpassword = document.getElementById('cpassword');

function validateForm() {
  if(password.value !== cpassword.value) {
    alert("Passwords doesn't match")
    return false;
  }
}
</script>
</html>


