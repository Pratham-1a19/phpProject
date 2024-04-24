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
    $query = "SELECT Password FROM movieUsers WHERE `Email` = '$email'";
    $queryResult = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($queryResult);
    $password = $row['Password'];
    $_SESSION['email'] = $email;
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

        $code = rand(100000, 999999);
        $_SESSION['code'] = $code;

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thanks you for reaching us!';
        $mail->Body = "This is your reset password code $code. \nPlease do not share it with anyone";

        echo "
            <script>
                alert('Check your email for security code');
                window.location.href='/PHP-Project/php/reset.php';
            </script>
        ";
        $mail->send();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
