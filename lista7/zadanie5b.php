<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <label>Modyfikacja detali zamówienia</label><br><br>
    <label>Id zamówienia:</label><br>


        <?php
        $idz = $_GET['idz'];
        echo "<input type='number' disabled value='".$idz."'><br>";

        $query = "SELECT p_id, sztuk, nazwa, idd FROM detal_zamow LEFT JOIN produkty ON idp=p_id WHERE z_id='".$idz."'";
        $result = $conn->query($query);
        while($row = $result->fetch_row())
        {
            echo "<hr><form action='zadanie5c.php' method='get'>";

            echo "<label for='productId'>Produkt: </label><br>";
            echo "<select name='productID' id='productID'>";
            $query1 = "SELECT idp, nazwa FROM produkty WHERE idp NOT LIKE ".$row[0].";";
            $result1 = $conn->query($query1);
            while($row1 = $result1->fetch_row())
            {
                echo "<option value='".$row1[0]."'>$row1[1]</option>";
            }
            echo "<option selected value='".$row[0]."'>".$row[2]."</option></select><br>";

            echo "<label for='quantity'>Ilość :</label><br>";
            echo "<input type='text' name='quantity' id='quantity' value='".$row[1]."'><br><hr>";

            echo "<label for='deleteClient'>Usunąć produkt z zamówienia:</label><br>";
            echo "<input type='radio' name='deleteClient' value='1'>";
            echo "<label for='deleteClient'>Tak</label>";
            echo "<input type='radio' name='deleteClient' value='0' checked>";

            echo "<label for='deleteClient'>Nie</label><br><br>";
            echo "<input type='submit' value='Submit'>";

            echo "<input type='hidden' id='idz' name='idz' value='".$idz."'>";
            echo "<input type='hidden' id='idd' name='idd' value='".$row[3]."'>";

            echo "</form>";
        }
        ?>
        <br><hr>
        <form action="zadanie5d.php" method='get'>
            <label for="product">Produkt: </label><br>
            <select name="product" id='product'>
            <?php
                $query = "SELECT idp, nazwa FROM produkty;";
                $result = $conn->query($query);
                while($row = $result->fetch_row())
                {
                    echo "<option value='".$row[0]."'>$row[1]</option>";
                }
            echo "<input type='hidden' id='idz' name='idz' value='".$idz."'>";
            ?>
            </select><br><br>
            <label for="quantity">Ilość: </label><br>
            <input type="number" name = 'quantity' id ='quantity' value='0'><br><br>
            
            <input type="submit" value="Add">
        </form>


        <!-- // $idz = $_GET['idz'];
            // select count(*) from detal_zamow where z_id = idz;

            // select * from detal_zamow where z_id = idz; -->
        <br>
</body>
</html>
<?php
$conn->close();
?>