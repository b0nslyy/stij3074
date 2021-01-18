<!DOCTYPE html>
<html>
    <style>

        table 
        {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            text-align: center;
            align: center;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            background-color: #ffffcf;
        }

        .blinking{
            animation:blinkingText 1.2s infinite;
        }
        @keyframes blinkingText{
            0%{     color: #ff495c;    }
            49%{    color: #ffd046; }
            60%{    color: #21fdc2; }
            99%{    color:#0496ff;  }
            100%{   color: #E27396;    }
        }

        h1
        {
            font-family: arial, sans-serif;
            font-size: 70px;
            text-align: center
        }

        h2
        {
            font-family: arial, sans-serif;
            text-align: center
        }

        h3
        {
            font-family: arial, sans-serif;
            text-align: center
        }

        .center
        {
            text-align: center;
            font-family: arial, sans-serif;
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
            cursor: pointer;
        }
        .button2 {background-color: #008CBA;}

    </style>

<h3>Welcome to</h3>
<div class ="blinking">
    <h1>PC Master Builder</h1>
</div>


<h2>Your PC Parts:</h2>

<div class="center">
    <a href="getsum.php?sum" class="button">Calculate Cost</a>
    <br>
    <a href="insert.php"class="button button2">Add Parts</a><br>
    <br>
</div>



</html>

<?php

    include_once("connector.php");

    $sql = "SELECT * FROM pcparts";
    $stmt = $conn->query($sql);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $parts = $stmt->fetchAll(); 

    echo "<table border='1'>
    <tr>
    
    <th>Name</th>
    <th>Manufacturer</th>
    <th>Description</th>
    <th>Price (in RM)</th>
    
    </tr>";

    include_once('connector.php');

    if(isset($_GET['sum']))
    {
        $sqlsum="SELECT sum(price) AS total FROM pcparts";
        $state = $conn->exec($sqlsum);
        
        echo "<script>alert('Approximate Cost : ' + total])</script>";
        
    }


    foreach($parts as $parts) 
    {
        echo "<tr>";
        echo "<td>".$parts['partsname']."</td>";
        echo "<td>".$parts['manufacturer']."</td>";
        echo "<td>".$parts['productdesc']."</td>";
        echo "<td>".$parts['price']."</td>";
        echo "<td><a href='delete.php?did=".$parts['partsname']."'>Delete</a></td>";
        echo "</tr>";
    }

?>