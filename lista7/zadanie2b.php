<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
<?php
$name = $_POST['name'];
$price = $_POST['price'];
$amount = $_POST['amount'];

if($price <=0 || $amount < 0)
{
    die("Price and Amount must be positive number");
}

$query = "SELECT nazwa FROM produkty WHERE nazwa LIKE '".$name."';";
if($conn->query($query)->num_rows > 0)
{
    die("Product already exists in the table");
}

$query = "INSERT INTO produkty (nazwa, cena, ilosc) VALUES ('".$name."', '".$price."', '".$amount."')";

if ($conn->query($query) === TRUE) {
    echo "New record added";
} else {
    echo "Error: ".$query."<br>".$conn->error;
}

$conn->close();
?>
</body>
</html>
