<?php
session_start();
include('./config.php');
$email = $_COOKIE["Email"];
$query = "SELECT * FROM movieUsers WHERE Email = '$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if (isset($_COOKIE["profilePhoto"]) && !empty($_COOKIE["profilePhoto"])) {
    $profilePhoto = "./uploads/" . $row["profilePhoto"];
} else {
    $profilePhoto = "../assets/profile-pic(m).png";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    setcookie("Name", $name, time() + (86400 * 30), "/");
    setcookie("Email", $email, time() + (86400 * 30), "/");
    setcookie("DateOfBirth", $dob, time() + (86400 * 30), "/");
    setcookie("Gender", $gender, time() + (86400 * 30), "/");
    $update_query = "UPDATE movieUsers SET Name = '$name', DateOfBirth='$dob', Gender='$gender' WHERE Email='$email'";
    mysqli_query($conn, $update_query);
    header("Location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="icon" href="../assets/sv.png" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    /* Base styles */
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
    }
    .profile-img {
      position: relative;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      margin: 0 auto;
    }
    .profile-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .upload-icon {
      position: absolute;
      bottom: 0;
      right: 0;
      transform: translate(50%, 50%);
      background-color: rgba(0, 0, 0, 0.8);
      padding: 5px;
      border-radius: 50%;
    }
    .upload-icon i {
      color: #fff;
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
    .form-group {
      position: relative;
      margin-bottom: 1rem;
    }
    .form-group input {
      width: 70%;
      padding: 1rem;
      font-size: 1rem;
      border-radius: 40px;
      border: 1px solid var(--accent-color);
      background-color: #444;
      color: #fff;
    }
    .form-group input:focus + label,
    .form-group input:not(:placeholder-shown) + label {
      top: -1rem;
      left: 0.5rem;
      font-size: 0.75rem;
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
  </style>
</head>
<body class="dark-mode">
  <div class="container">
    <div class="profile-card1">
      <form action="./upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileInput" id="fileInput" style="display: none;" accept="image/*">
        <label for="fileInput" class="upload-icon">
          <i class="fas fa-cloud-upload-alt"></i>
        </label>
        <div class="profile-img" id="profileImgContainer">
          <img src="<?php echo $profilePhoto; ?>" alt="Profile Picture" id="profileImg">
        </div>
    </div>
    <div class="profile-card2">
      <div class="profile-info">
          <div class="form-group">
            <label for="name">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="name" name="name" placeholder=" " value="<?php echo $row["Name"]; ?>">  
          </div>
          <div class="form-group">
            <label for="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" id="email" name="email" placeholder=" " value="<?php echo $row["Email"]; ?>">
          </div>
          <div class="form-group">
            <label for="dob">DOB</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="dob" name="dob" placeholder=" " value="<?php echo $row["DateOfBirth"]; ?>">
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>&nbsp;&nbsp;
            <input type="text" id="gender" name="gender" placeholder=" " value="<?php echo $row["Gender"]; ?>">
          </div>
          <a href="./profile.php"><button style="border-radius: 40px;" class="btn btn-primary">Save Changes</button></a>
        </form>
      </div>
    </div>
  </div>
  <script>
    const fileInput = document.getElementById('fileInput');
    const profileImg = document.getElementById('profileImg');

    fileInput.addEventListener('change', (event) => {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          profileImg.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
