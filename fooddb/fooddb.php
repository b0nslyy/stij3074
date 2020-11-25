<?php
    $servername = "localhost";
    $username = "root";
    $passworddb = "";
    $dbname = "fooddb";
    $connect = mysqli_connect($servername, $username, $passworddb, $dbname);

    $foodid = $_POST['foodid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $calorie = $_POST['calorie'];

    $sql = "INSERT INTO fooddb (foodid, name, price, quantity, calorie)
    VALUES ($foodid, $name, $price, $quantity, $calorie)";

    if ($connect->query($sql) === TRUE) {
         echo "New record created successfully";
        } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $connect->close();



    $conn = null;

?> 

