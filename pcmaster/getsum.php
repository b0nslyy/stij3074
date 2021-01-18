<?php

    include_once('connector.php');

    if(isset($_GET['sum']))
    {
        //$sum = $_GET['sum'];
        $sum = $conn->query("SELECT SUM(price) AS total FROM pcparts")->fetchColumn();
        echo "<p class='result'>" . $sum . "</p>";
        //return $sum;
        
    }

    $conn = null;

?>

<!DOCTYPE html>
<html>
    <h3>Malaysian Ringgit is what you will need.</h3>

    <a href="index.php" class='button'>Return to Parts View</a>

    <style>
    
    body {
            background-color: #ffffcf;
        }

    .button
        {
            background-color: #4CAF50;
            font-family: arial, sans-serif;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            width:50%;
            cursor: pointer;
        }

        h3
        {
            font-family: arial, sans-serif;
            text-align: center
        }

        .result
        {
            font-family: arial, sans-serif;
            font-size: 50px;
            text-align: center
            
        }
    </style>

</html>
