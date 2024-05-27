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
    <form action="zadanie4c.php" method="get">
<label>Edycja klienta</label><br><br>

<label for="idk">Id:</label><br>
<?php
echo "<input type='text' disabled value='".$idk."'><br>";
echo "<input type='hidden' id='idk' name='idk' value='".$idk."'>";


$query = "SELECT nazwa, miasto, adres, telefon FROM klienci WHERE idk=".$idk.";";
$result = $conn->query($query);
if($result->num_rows > 0)
{
    $row = $result->fetch_row();
    echo "<label for='name'>Nazwa:</label><br>";
    echo "<input type='text' id='name' name='name' value='".$row[0]."'><br>";

    echo "<label for='city'>Miasto:</label><br>";
    echo "<input type='text' id='city' name='city' value='".$row[1]."'><br>";

    echo "<label for='address'>Adres:</label><br>";
    echo "<input type='text' id='address' name='address' value='".$row[2]."'><br>";

    echo "<label for='phone'>Telefon:</label><br>";
    echo "<input type='tel' id='phone' name='phone' value='".$row[3]."' pattern='[0-9]{9}'><br>";

    echo "<label for='deleteClient'>Usunąć klienta:</label><br>";
    echo "<input type='radio' name='deleteClient' value='1'>";
    echo "<label for='deleteClient'>Tak</label>";
    echo "<input type='radio' name='deleteClient' value='0' checked>";
    echo "<label for='deleteClient'>Nie</label><br><br>";

    echo "<input type='submit' value='Submit'>";
}
else
{
    echo "<br>Query error<br>cannot find client by this id: <b>".$idk."</b><br><br>";
    echo "<a href='zadanie4a.php'><button type='button'>Return to chosing id</button></a>";
}

?>
    </form>
</body>
</html>

<?php
$conn->close();
?>