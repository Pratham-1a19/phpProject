<?php 
    include('./config.php');
    $query = mysqli_query($conn, 'DELETE FROM movieUsers');
    header("location:./adminPanel.php")
?>