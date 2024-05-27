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
    <?php
    $client_name = $_POST['client_name'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    if($quantity <= 0)
    {
        die("Order number must be more than 0");
    }

    $query = "SELECT ilosc FROM produkty WHERE nazwa LIKE '".$product_name."';";
    $result = $conn->query($query)->fetch_row()[0];
    if($result <= 0)
    {
        die("Product out of stock");
    }

    $query = "SELECT idk FROM klienci WHERE nazwa LIKE '".$client_name."'";
    $idk =  $result = $conn->query($query)->fetch_row()[0];
    if($result === FALSE)
    {
        die("Id clients error");
    }

    $query = "SELECT idp FROM produkty WHERE nazwa LIKE '".$product_name."'";
    $idp =  $result = $conn->query($query)->fetch_row()[0];
    if($result === FALSE)
    {
        die("Id product error");
    }

    $query = "SELECT ilosc FROM produkty WHERE nazwa='".$product_name."';";
    $prodcut_quantity =  $result = $conn->query($query)->fetch_row()[0];

    if($prodcut_quantity < $quantity)
    {
        die("Too few products in stock");
    }

    $currentDateTime = date("Y-m-d H:i:s");
    $query = "INSERT INTO zamow (k_id, data) VALUES ('".$idk."', '".$currentDateTime."')";
    $result = $conn->query($query);
    if($result === FALSE)
    {
        die("Adding to zamow table error");
    }
    $idz = $conn->insert_id;

    $query = "INSERT INTO detal_zamow (z_id, p_id, sztuk) VALUES ('".$idz."','".$idp."','".$quantity."')";
    $result = $conn->query($query);
    if($result === FALSE)
    {
        die("Adding to detal_zamow table error");
    }

    $query = "UPDATE produkty SET ilosc = ".$prodcut_quantity-$quantity." WHERE idp='".$idp."';";
    $result = $conn->query($query);
    if($result === FALSE)
    {
        die("Update produkty error");
    }

    echo "The order has been placed";
    $conn->close();
    ?>
</body>
</html>