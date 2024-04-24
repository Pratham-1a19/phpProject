<?php
include('./config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nameErr = $emailErr = $passwordErr = $cpasswordErr = "";

        $name = $_POST["name"];
        $email = $_POST["email"];
        $dob = $_POST["date"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $lastLogin = date('Y-m-d H:i:s');

        if($password != $cpassword) {
          echo "<script>alert('Passwords doesn't match')</script>";
        }
        else {
          $quer2 = "SELECT * FROM movieUsers WHERE Email = '$email'";
          $result = mysqli_query($conn, $quer2);
          
          if(mysqli_num_rows($result) > 0) {
            echo "
              <script>
                alert('Email Already Exists')
                window.location.href='/PHP-Project/php/signupForm.php'
              </script>
              ";
          }
          else {
            setcookie("Email", $email, time() + (86400 * 30), '/');
            setcookie("Password", $password, time() + (86400 * 30), '/');
            setcookie("Name", $name, time() + (86400 * 30), '/');
            setcookie("DateOfBirth", $dob, time() + (86400 * 30), '/');
            setcookie("LastLogin", $lastLogin, time() + (86400 * 30), '/');

            $mail = new PHPMailer(true);
            try {

              // Server settings
              $mail->isSMTP();
              $mail->Host       = 'smtp.gmail.com';
              $mail->SMTPAuth   = true;
              $mail->Username   = 'lorem.ipsum.sample.email@gmail.com';
              $mail->Password   = 'tetmxtzkfgkwgpsc';
              $mail->SMTPSecure = 'ssl';
              $mail->Port       = 465;
      
              // Recipients
              $mail->setFrom('lorem.ipsum.sample.email@gmail.com', 'PHP-Project');
              $mail->addAddress($email);
              $mail->addReplyTo('lorem.ipsum.sample.email@gmail.com', 'PHP-Project');
      
              $otp = rand(100000, 999999);
              $_SESSION['otp'] = $otp;
              
              // Content
              $mail->isHTML(true);
              $mail->Subject = 'OTP Generated!';
              $mail->Body = "Your new OTP is: $otp";
      
              echo "
                  <script>
                      alert('Check your email for OTP');
                      window.location.href='/PHP-Project/php/otpVerify.php';
                  </script>
              ";
              $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                // echo $e;
            }
          }
        }
    }
?>

<!-- $query = mysqli_query($conn, "INSERT INTO movieUsers(Name, Email, DateOfBirth, Password, LastLogin) VALUES ('$name','$email','$dob','$password', '$lastLogin')"); // After verification -->