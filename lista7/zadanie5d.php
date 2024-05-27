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
    <?php
    $idp = $_GET['product'];
    $quantity = $_GET['quantity'];
    $idz = $_GET['idz'];

    if($quantity < 1)
    {
        die("Invalid argument");
    }
    $query = "INSERT INTO detal_zamow (z_id,p_id, sztuk) values(".$idz.",".$idp.",".$quantity.")";
    $result = $conn->query($query);
    if($result === TRUE)
    {
        echo "Produkt dodany do zamówienia pomyślnie<br>";
        echo "<a href='zadanie5a.php'><button>Powrót</button></a>";
    }
    else
    {
        echo "Error: nie udało się wykonać zapytania<br>";
    }
    ?>
    
</body>
</html>
<?php
$conn->close();
?>