<?php
include('./config.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
session_start();
if (isset($_POST["email"])) {

    $mail = new PHPMailer(true);

    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM movieUsers WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0) {
        
        // Setting the cookies
        setcookie("Email", $email, time() + (86400 * 30), '/');
        setcookie("Password", $password, time() + (86400 * 30), '/');
        setcookie("profilePhoto", $row["profilePhoto"], time() + (86400 * 30), "/");
        setcookie("id", $id, time() + (86400 * 30), '/');
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
            $mail->addAddress($_POST["email"]);
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
            $lastLogin = date('Y-m-d H:i:s');
            $updateLogin = "UPDATE movieUsers SET lastLogin = '$lastLogin' WHERE Email = '$email'";
            $updateQuery = mysqli_query($conn, $updateLogin);
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } 
    else {
        echo "
            <script>
                alert('Invalid Credentials!');
                window.location.href='/PHP-Project/php/login.php';
            </script>
        ";
    }
}
