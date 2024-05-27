<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
<?php
$choice = $_GET['deleteClient'];
$idk = $_GET['idk'];

if($choice == 0)
{
    $name = $_GET['name'];
    $city = $_GET['city'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];

    $query = "UPDATE klienci SET nazwa = '".$name."', miasto = '".$city."', adres = '".$address."', telefon = '".$phone."' WHERE idk='".$idk."';";
    $result = $conn->query($query);
    if($result === TRUE)
    {
        echo "Client has been updated";
    }
    else
    {
        echo "Something went wrong";
    }
}
else
{
    $query = "DELETE FROM detal_zamow WHERE z_id IN (SELECT idz FROM zamow WHERE k_id = '".$idk."')";
    $conn->query($query);

    $query = "DELETE FROM zamow WHERE k_id = '".$idk."'";
    $conn->query($query);

    $query = "DELETE FROM klienci WHERE idk='".$idk."';";
    $result = $conn->query($query);

    if($result === TRUE)
    {
        echo "Client has been deleted";
    }
    else
    {
        echo "Something went wrong";
    } 
}
?>
<br><br>
<a href="zadanie4a.php"><button type="button">Return to chosing id</button></a>
</body>
</html>
<?php
$conn->close();
?>