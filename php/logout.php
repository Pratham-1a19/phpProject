<?php
    session_unset();
    session_destroy();
    setcookie("Email", "", time() - 1, "/");
    setcookie("Password", "", time() - 1, "/");
    setcookie("Name", "", time() - 1, "/");
    setcookie("DateOfBirth", "", time() - 1, "/");
    setcookie("profilePhoto", "", time() - 1, "/");
    setcookie("LastLogin", "", time() - 1, "/");
    header("Location: ../public/index.html");
?>