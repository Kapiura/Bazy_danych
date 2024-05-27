<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <form action="zadanie2b.php" method="post">
        <label for="name">Nazwa produktu:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="price">Cena:</label><br>
        <input type="number" id='price' name='price' step="any" required><br>

        <label for="amount">Ilosc:</label><br>
        <input type="number" id='amount' name='amount' required><br><br>
        
        <input type="submit" value="Submit">

    </form>
</body>
</html>
