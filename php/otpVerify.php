<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify OTP</title>
  <link rel="stylesheet" href="../css/stylesForLogin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" href="../assets/sv.png" type="image/png">
  <style>
       /* Chrome, Safari, Edge, Opera */
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
</head>
<body>
  <div class="wrapper">
    <form action="./verify.php" method="POST">
      <h1>Verify OTP</h1>
      <div class="input-box">
        <input type="number" name="otp" placeholder="Enter 6 digit OTP" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <input type="submit" class="btn" value="Verify"></input>
    </form>
  </div>
</body>
</html>
