<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zadanie 7</title>
</head>
<body>

<?php

?>
<form action="zadanie7b.php" method="post">
		<label for="name">Imię:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="surname">Nazwisko:</label>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="surname">Zainteresowania:</label><br>
        <input type="checkbox" id="interest1" name="interests[]" value="sport">
        <label for="interest1">Sport</label><br>

        <input type="checkbox" id="interest2" name="interests[]" value="muzyka">
        <label for="interest2">Muzyka</label><br>

        <input type="checkbox" id="interest3" name="interests[]" value="filmy">
        <label for="interest3">Filmy</label><br>

        <input type="checkbox" id="interest4" name="interests[]" value="kuchnia">
        <label for="interest4">Kuchnia</label><br>
        
        <input type="checkbox" id="interest4" name="interests[]" value="gry">
        <label for="interest4">Gry</label><br><br>

        <select name="subjects[]" multiple>
            <option value="matematyka">Matematyka</option>
            <option value="fizyka">Fizyka</option>
            <option value="pracownia fizyczna">Pracownia fizyczna</option>
            <option value="bazy danych">Bazy danych</option>
            <option value="metody numeryczne">Metody numeryczne</option>
        </select><br><br>

        <label for="year">Rok studiow:</label><br>
        <input type="radio" id="red" name="year" value="1">
        <label for="1">1</label><br>

        <input type="radio" id="green" name="year" value="2">
        <label for="2">2</label><br>

        <input type="radio" id="blue" name="year" value="3">
        <label for="3">3</label><br>
        
        <input type="radio" id="green" name="year" value="4">
        <label for="4">4</label><br>

        <input type="radio" id="green" name="year" value="5">
        <label for="5">5</label><br><br>

        <input type="submit" value="Submit">
</form>
</body>
</html>
