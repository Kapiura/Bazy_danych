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
<?php
    function zadanie3()
    {
        echo "<table>";
        $values = array('00','33','66','99','cc','ff');
        for($i = 0; $i < 36; $i++)
        {
            echo "<tr>";
            for($j = 0; $j < 6; $j++)
            {
                $red = $values[$j];
                $green = $values[$i%6];
                if($i%6==0)
                {
                    $blue = $values[$i/6];
                }
                $color = $red.$green.$blue;
                echo '<td style="background-color: ' . $color . '"></td>';
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    zadanie3();
?>