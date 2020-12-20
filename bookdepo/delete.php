<?php
    include_once("dbconnect.php");

    $id = $_GET['id'];

    
    $sql = "DELETE FROM bookdepo WHERE id = '$id'"; 

    if (mysqli_query($connect, $sql)) {
    mysqli_close($conn);
    header('Location: view.php'); 
    exit;
    } else {
    echo "Error deleting record";
    }



?>