<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>
    <?php
    $date = $_GET['date'];

    $query = "SELECT DATE(data), klienci.nazwa, produkty.nazwa, sztuk FROM zamow LEFT JOIN klienci ON k_id=idk LEFT JOIN detal_zamow ON idz=z_id LEFT JOIN produkty ON idp=p_id WHERE DATE(data) LIKE '".$date."'";
    $result = $conn->query($query);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_row())
        {
            echo "Klient: ".$row[1]."<br>";
            echo "Produkt: ".$row[2]."<br>";
            echo "Ilość: ".$row[3]."<br>";
            echo "Data: ".$row[0]."<br>";
            echo "<hr>";
        }
    }
    else
    {
        echo "No orders that day<br>";
    }
    
    ?>
</body>
</html>
<?php
$conn->close();
?>