<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 20px;
            height: 20px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
<?php
$n = $_GET['n'];
$arr = array();
for($i = 0; $i <= $n; $i++)
{
    for($j = 0; $j <= $n; $j++)
    {
        if($i == 0)
        {
            $arr[$i][$j] = $j;
        }
        elseif($j == 0 )
        {
            $arr[$i][$j] = $i;
        }
        else
        {
            $arr[$i][$j] = $i*$j;
        }
    }
}


foreach($arr as $row)
{
    echo "<tr>";
    foreach($row as $el)
    {
        echo "<td>".$el."</td>";
    }
    echo "</tr>";
}
?>
    </table>
</body>
</html>