<?php
include_once("dbconnect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$descr = $_POST['descr'];
$publisher = $_POST['publisher'];
$isbn = $_POST['isbn'];

$sql = "UPDATE bookdepo SET title='$title', author='$author', price='$price', descr='$descr', publisher='$publisher', isbn='$isbn' WHERE id = '$id'";

if ($connect->query($sql) === TRUE) 
{
  echo "Record updated successfully";
} 
    else 
    {
        echo "Error updating record: " . $connect->error;  
    }

$connect->close();

?>

<!DOCTYPE html>
<html>
    <form action="update.php" method="POST" align="center">

    
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