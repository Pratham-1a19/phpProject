<?php 
    session_start();
    include('./config.php');
    if(isset($_POST["otp"])) {
        $otp = $_POST["otp"];
        $sessionOTP = $_SESSION['otp'];
        $sessionOTPAdmin = $_SESSION['otpAdmin'];
        if($otp == $sessionOTP) {

                // Sign up
                if(isset($_COOKIE["DateOfBirth"])){
                    $name = $_COOKIE["Name"];
                    $email = $_COOKIE["Email"];
                    $password = $_COOKIE["Password"];
                    $dob = $_COOKIE["DateOfBirth"];
                    $lastLogin = $_COOKIE["LastLogin"];

                    $query = mysqli_query($conn, "INSERT INTO movieUsers(Name, Email, DateOfBirth, Password, LastLogin) VALUES ('$name','$email','$dob','$password', '$lastLogin')");
                }
            
            echo "
                <script>
                    alert('Verified Successfully');
                    window.location.href='/PHP-Project/php/home.php';
                </script>";
        }
        if($otp == $sessionOTPAdmin) {
            echo "
                <script>
                    alert('Verified Successfully');
                    window.location.href='/admin';
                </script>
            ";
        }
        else {
            echo "
                <script>
                    alert('Invalid OTP');
                    window.location.href='/PHP-Project/php/otpVerify.php';
                </script>
            ";
        }
    }
?>