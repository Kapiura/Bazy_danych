<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
<form action="zadanie3b.php" method="post">
    <label>Nowe zamowienie</label><br><br>
    <label for="client_name">Klient:</label><br>

    <select name="client_name" id="client_name">
    <?php
    $query = "SELECT nazwa FROM klienci;";
    $result = $conn->query($query);
    while($row = $result->fetch_row())
    {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    ?>
    </select><br>

    <label for="quantity">Ilość:</label><br>
    <input type="number" id="quantity" name="quantity" required><br>

    <label for="product_name">Produkt:</label><br>
    <select name="product_name" id="product_name">
    <?php
    $query = "SELECT nazwa FROM produkty;";
    $result = $conn->query($query);
    while($row = $result->fetch_row())
    {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    ?>
    </select><br><br>

    <input type="submit" value="Submit">

</form>
</body>
</html>
<?php
$conn->close();
?>