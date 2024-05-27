<?php
    function zadanie2(&$array)
    {
        for($i = 1; $i < sizeof($array); $i++)
        {
            $temp = $array[$i];
            $j = $i - 1;

            while($j >= 0 && $array[$j]>$temp)
            {
                $array[$j+1] = $array[$j];
                $j--;
            }
            $array[$j+1] = $temp;
        }
    }
    $tab = [5,7,3,6,9,2,10,1,4,7,8];
    echo "Tablica przed<br>";
    echo implode("\n",$tab)."<br>";
    zadanie2($tab);
    echo "Po sortowaniu<br>";
    echo implode("\n",$tab);
?>