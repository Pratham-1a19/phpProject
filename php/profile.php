<?php 
if (!(isset($_COOKIE["Email"]) && isset($_COOKIE["Password"]))) {
  header("location:/PHP-Project/php/login.php");
  exit();
}
session_start(); 
include('./config.php');
$email = $_COOKIE["Email"];
$query = "SELECT * FROM movieUsers WHERE Email = '$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_COOKIE["profilePhoto"]) && !empty($_COOKIE["profilePhoto"])) {
  $profilePhoto = "./uploads/" . $row["profilePhoto"];
} else {
  $profilePhoto = "../assets/profile-pic(m).png";  // Default profile photo
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="../assets/sv.png" type="image/png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

  <style>
    body {
      display: flex;
      justify-content: center;
      min-height: 100vh;
      background-color: rgb(22 22 22);
      font-family: 'Poppins', serif;
      background-image: url('../assets/bg.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      box-shadow: inset 0px 0px 100px 55px rgb(0, 0, 0);
      backdrop-filter: brightness(0.9);
    }

    :root {
      --background-color: #f8f9fa;
      --text-color: #333;
      --secondary-text-color: #666;
      --btn-background-color: #007bff;
      --btn-border-color: #007bff;
      --accent-color: #6c757d;
    }

    body.dark-mode {
      --background-color: rgb(59, 59, 56);
      --text-color: #fff;
      --secondary-text-color: #ccc;
      --btn-background-color: #007bff;
      --btn-border-color: #007bff;
      --accent-color: #adb5bd;
    }

    body {
      background-color: var(--background-color);
      color: var(--text-color);
      font-family: 'Poppins', sans-serif;
      transition: background-color 0.3s, color 0.3s;
      position: relative;
      line-height: 1.6;
    }

    .text-muted {
      color: var(--accent-color);
    }

    .profile-card1 {
      position: relative;
      top: 60px;
      left: 430px;
      max-width: 225px;
      height: 225px;
      padding: 30px;
      padding-bottom: 0px;
      background-color: #333;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .profile-card2 {
      max-width: 700px;
      margin: 50px auto;
      margin-top: 30px;
      background-color: #333;
      padding: 20px;
      padding-top: 50px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .profile-img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .profile-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .upload-icon {
      position: absolute;
      bottom: 40px;
      right: 35px;
      transform: translate(50%, 50%);
      padding: 7px;
      border-radius: 45%;
      cursor: pointer;
    }

    .profile-info {
      text-align: center;
    }

    h3 {
      margin-bottom: 10px;
      color: var(--text-color);
      font-weight: normal;
    }

    p {
      margin-bottom: 15px;
      color: var(--secondary-text-color);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      font-size: large;
    }

    table td {
      padding: 8px;
    }

    .btn-primary {
      background-color: var(--btn-background-color);
      border-color: var(--btn-border-color);
    }

    .btn-primary:hover {
      background-color: var(--btn-background-color);
      border-color: var(--btn-border-color);
    }

    .dark-mode-toggle {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
    #upload-img {
      padding-left: 400px;
    }
  </style>
</head>
<body class="dark-mode">
  <div class="container">
    <div class="profile-card1">
      <div class="profile-img" id="profileImgContainer">
        <img src="<?php echo $profilePhoto; ?>" alt="Profile Picture" id="profileImg">
      </div>
    </div>
    <div class="profile-card2">
      <div class="profile-info">
        <table>
          <tr>
            <td>Name</td>
            <td><?php echo $row["Name"]; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $row["Email"]; ?></td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td><?php echo $row["DateOfBirth"]; ?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo $row["Gender"]; ?></td>
          </tr>
        </table>
      <a href="./editProfile.php"><button style="border-radius: 40px;" class="btn btn-primary">Edit Profile</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="./logout.php"><button style="background-color: rgb(255, 0, 0); border-radius: 40px;" class="btn btn-primary">Logout</button></a>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
