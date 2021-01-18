<!DOCTYPE html>
<html>
    <body>
        <h1>Enter Parts Detail</h1>

        <form action="insert.php" method="POST" name="input">
            <label for="partsname">Parts Name: </label><br>
            <input type="text" id="partsname" name="partsname" value="">
            <br>
            <br>
            Manufacturer:<br>
            <select name="manufacturer" id="manufacturer">
                <optgroup label="CPU"></optgroup>
                    <option value="AMD">AMD</option>
                    <option value="Intel">Intel</option>
                </optgroup>
                <optgroup label="GPU"></optgroup>
                    <option value="AMD">AMD</option>
                    <option value="NVidia">NVidia</option>
                </optgroup>
                <optgroup label="Motherboard"></optgroup>
                    <option value="Asus">Asus</option>
                    <option value="ASRock">ASRock</option>
                </optgroup>
                <optgroup label="Other"></optgroup>
                    <option value="Other">Other</option>
                </optgroup>
              </select> <br><br>
            <label for="productdesc">Description: </label><br>
            <textarea id="productdesc" name="productdesc" rows="4" cols="40">
            </textarea>
            <br><br>
            <label for="price">Price (in RM): </label><br>
            <input type="text" id="price" name="price" value="">
            <br>
            <br>
            <input type="submit" value="Submit"> 
        </form>
        <br>
        <a href="index.php" class="button">Go to Parts View</a>

    </body>

    <style>

        body
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

        body {
            background-color: #ffffcf;
        }

    </style>

</html>

<?php
    include_once("connector.php");

    if (isset($_POST['partsname'])) {
        $partsname = $_POST['partsname'];
        $manufacturer = $_POST['manufacturer'];
        $productdesc = $_POST['productdesc'];
        $price = $_POST['price'];
      
        try {
            $sql = "INSERT INTO pcparts (partsname, manufacturer, productdesc, price)
            VALUES ('$partsname', '$manufacturer', '$productdesc', '$price')";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':partsname', $partsname);
            $stmt->bindParam(':manufacturer', $manufacturer);
            $stmt->bindParam(':productdesc', $productdesc);
            $stmt->bindParam(':price', $price);

            $stmt->execute();
            echo "<script> alert('Insert Success')</script>";
      
        } catch(exception $e) {
          echo "<script> alert('Insert Error')</script>";
        }
      }


?> 