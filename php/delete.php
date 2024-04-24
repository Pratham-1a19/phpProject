<?php
    include('./config.php');
    $id = $_GET["id"];
    if(isset($_GET["id"])) {
        $query = mysqli_query($conn, "DELETE FROM movieUsers WHERE id=$id");
        header("location:../../admin/");
    }
?>