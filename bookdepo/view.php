<?php
    include_once("dbconnect.php");

    $sql = "SELECT * FROM bookdepo";
    $result = $connect->query($sql); 

    echo "<table border='1'>

    <tr>

    <th>ID</th>

    <th>Title</th>

    <th>Author</th>

    <th>Price</th>

    <th>Description</th>

    <th>Publisher</th>

    <th>ISBN</th>

    </tr>";

  

    while($row = mysqli_fetch_array($result))

      {

      echo "<tr>";

      echo "<td>" . $row['id'] . "</td>";

      echo "<td>" . $row['title'] . "</td>";

      echo "<td>" . $row['author'] . "</td>";

      echo "<td>" . $row['price'] . "</td>";

      echo "<td>" . $row['descr'] . "</td>";

      echo "<td>" . $row['publisher'] . "</td>";

      echo "<td>" . $row['isbn'] . "</td>";

      echo "<td><a href='delete.php?id=".$row['id']."'> Delete </a></td>";

      echo "<td><a href='update.php?id=".$row['id']."'> Update </a></td>";

      echo "</tr>";

      }

    echo "</table>";

    

    mysqli_close($connect);
    
    


?>

<!DOCTYPE html>
<html>
<a href='insert.php'> Add New Entry </a>

</html>
