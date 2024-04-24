<?php
include('./config.php');
$email = $_COOKIE["Email"];
$query = "SELECT * FROM movieUsers WHERE Email = '$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fileInput'])) {
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

    $fileTmpName = $_FILES['fileInput']['tmp_name'];
    $fileSize = $_FILES['fileInput']['size'];
    $fileError = $_FILES['fileInput']['error'];
    $fileType = $_FILES['fileInput']['type'];

    if ($fileError === UPLOAD_ERR_OK) {
        $fileExt = strtolower(pathinfo($_FILES['fileInput']['name'], PATHINFO_EXTENSION));
        $allowed = array('jpeg', 'jpg', 'png');

        if (in_array($fileExt, $allowed)) {
            if ($fileSize < 100000000) {
                $fileNameNew = $row["id"] . "." . $fileExt;
                $fileDestination = dirname(__DIR__)."/php/uploads/" . $fileNameNew;
                echo $fileDestination . " " . $fileNameNew;
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    $sql = "UPDATE movieUsers SET profilePhoto = '$fileNameNew' WHERE Email = '$email'";
                    setcookie("profilePhoto", $fileDestination, time() + (86400 * 30), "/");
                    if (mysqli_query($conn, $sql)) {
                        header("Location: profile.php");
                        exit();
                    } else {
                        echo "Set error message";
                    }
                } else {
                    echo "Error occurred while uploading the file.";
                }
            }
            else{
                echo "File is too large. Size should be less than 1 mb";
            }
        } else {
            echo "Wrong file extension.";
        }
    } else {
        header("Location: ./profile.php");
    }
} else {
    echo "No file selected.";
}
?>
