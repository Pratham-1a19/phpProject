<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset your Password</title>
  <link rel="stylesheet" href="../css/stylesForLogin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" href="../assets/sv.png" type="image/png">
</head>
<style>
    .mt-3 {
        margin: 1rem 0rem;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
</style>
<body>
  <div class="wrapper">
    <form action="./resetPassword.php" method="POST">
      <h1 align="center">Reset your password</h1>
      <p align="center" class="mt-3">Do not forget your password this time!</p>
      <div class="input-box">
        <input type="password" name="newPassword" placeholder="New Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="number" name="code" placeholder="Security code" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <input type="submit" name="submit" class="btn" value="Reset my Password">
    </form>
  </div>
</body>
</html>
