<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $interests = $_POST['interests'];
    $subjects = $_POST['subjects'];
    $year = $_POST['year'];

    echo "Student ".$year." roku ".$name." ".$surname." lubi ".implode(", ",$subjects).", a w wolnym czasie uprawia ".implode(", ",$interests).".";
    ?>
</body>
</html>