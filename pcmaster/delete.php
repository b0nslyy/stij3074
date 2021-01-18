<?php
    include_once('connector.php');

    if(isset($_GET['did']))
    {
        $delete_id = $_GET['did'];
        $sql = "DELETE FROM pcparts WHERE partsname = '".$delete_id."'";
        $conn->exec($sql);
        header('location:index.php');
    }
    else
    {
        echo $sql . "<br>" . $e->getMessage();
    }


    $conn = null;

?>