<?php
$sum = 0;
foreach($_POST as $el)
{
    $sum += strlen($el);
}
echo "Łączna długość: ".$sum;
?>