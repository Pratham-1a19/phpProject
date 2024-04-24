<?php 
    include('./config.php');
    session_start();

    $email = $_SESSION['email'];
    $newPass = $_POST["newPassword"];
    $confirmPass = $_POST["confirmPassword"];
    $code = $_POST["code"];
    $sessionCode = $_SESSION['code'];

    if(isset($_POST["newPassword"])) {
        if($newPass != $confirmPass) {
            echo "
                <script>
                    alert('Passwords doesn't match');
                    window.location.href='/PHP-Project/php/reset.php'
                </script>
            ";
        }
        else if($code != $sessionCode) {
            echo "
                <script>
                    alert('Invalid Security code');
                    window.location.href='/PHP-Project/php/reset.php'
                </script>
            ";
        }
        else {
            $query = mysqli_query($conn, "UPDATE movieUsers SET Password = '$newPass' WHERE Email='$email'");
            echo "
                <script>
                    alert('Your Password Updated Successfully');
                    window.location.href='/PHP-Project/php/login.php'
                </script>
            ";
        }
    }
?>