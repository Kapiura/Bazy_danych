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
        $idz = $_GET['idz'];
        $idd = $_GET['idd'];
        $quantity = $_GET['quantity'];
        $choice = $_GET['deleteClient'];
        $idp = $_GET['productID'];

        if($choice == 0)
        {
            $query = "UPDATE detal_zamow SET p_id = '".$idp."', sztuk = '".$quantity."' WHERE idd='".$idd."';";
            $result = $conn->query($query);
            if($result === TRUE)
            {
                echo "Zaktualizowano pomyślnie rekord w bazie danych";
            }
            else
            {
                die("Błąd zapytania");
            }
        }
        else
        {
            $query = "DELETE FROM detal_zamow WHERE p_id=".$idp."";
            $result = $conn->query($query);
            if($result === TRUE)
            {
                echo "Pomyślnie usunięto rekord z bazy danych";
            }
            else
            {
                die("Błąd zapytania");
            }
        }
      
    ?>
    
</body>
</html>
<?php
$conn->close();
?>