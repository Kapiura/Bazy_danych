<style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
    </style>
<?php
	function zadanie4($numberOfDaysInMonth,$numberOfWeek)
	{
		if($numberOfDaysInMonth <= 27 || $numberOfDaysInMonth > 31)
		{
			throw new InvalidArgumentException("Number of days must be between 28 and 31");
		}
		if($numberOfWeek <= 0 || $numberOfWeek > 7)
		{
			throw new InvalidArgumentException("Number of the week day must be between 1 and 7");
		}

		$daysOfWeek = array(
			1 => "Poniedziałek",
			2 => "Wtorek",
			3 => "Środa",
			4 => "Czwartek",
			5 => "Piątek",
			6 => "Sobota",
			7 => "Niedziela"
		);

		$result =  array();
		$week = 0;
		for ($day = 1; $day <= $numberOfDaysInMonth; $day++) {
			$week = floor(($day + $numberOfWeek - 2) / 7);
	
			$weekDay = ($day + $numberOfWeek - 2) % 7;
	
			if (!isset($result[$week])) {
				$result[$week] = array_fill(0, 7, "");
			}
			$result[$week][$weekDay] = $day." ".$daysOfWeek[$weekDay+1];
		}
		return $result;
	}

	$tab = zadanie4(31,5);
	echo "<table>";
	for($i = 0; $i < sizeof($tab); $i++)
	{
		echo '<tr>';
		for($j = 0; $j < sizeof($tab[$i]); $j++)
		{
				echo '<td>'.$tab[$i][$j].'</td>';
		}
		echo '</tr>';
	}
	echo "</table>";
?>
