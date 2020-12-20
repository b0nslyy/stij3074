<?php
    include_once("dbconnect.php");

    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];
    

    $sql = "INSERT INTO bookdepo (id, title, author, price, descr, publisher, isbn) 
    VALUES ('$id', '$title', '$author', '$price', '$descr', '$publisher', '$isbn')";

    if ($connect->query($sql) === TRUE) {
        echo "Successful";
        } else {
         echo "Error: " . $sql . "<br>" . $connect->error;
        }

        $connect->close();



    $connect = null;

    

?> 

<!DOCTYPE html>
<html>
    <form action="insert.php" method="POST" align="center">

        <label for="id">ID: </label><br>
        <input type="text" id="id" name="id" value=""><br>
    
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value=""><br>
        
        <label for="price">Price (in RM):</label><br>
        <input type="text" id="price" name="price" value=""><br>

        <label for="descr">Description:</label><br>
        <input type="text" id="descr" name="descr" value=""><br>

        <label for="publisher">Publisher:</label><br>
        <input type="text" id="publisher" name="publisher" value=""><br>

        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn" value=""><br>
    
        <input type="submit" value="Submit">
      </form>

      <br><a href='view.php'> View Entry </a>
</html>

