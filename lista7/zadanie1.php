<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 100px;
            height: 20px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <?php

    $query = " select DATE_FORMAT(data, '%Y-%m-%d') as data_new, sum(cena * sztuk)  
    from detal_zamow left join produkty on idp=p_id left join zamow on idz=z_id group by data_new;";
    
    $result = $conn->query($query);

    echo "<td>Data</td><td>Cena</td>";
    while($row = $result->fetch_row())
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }

    $conn->close();
    ?>
    </table>
</body>
</html>