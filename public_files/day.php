<?php  
define('DAY_HR_START', 9);
define('DAY_HR_END', 17);

echo "<table>";

for ($i = DAY_HR_START; $i < DAY_HR_END; $i++){

	for($j = 0; $j < 60; $j += 15){

		$hour = $i;
		$minutes = $j;
		$meridian = 'AM';

		if ($hour > 12) {

			$meridian = "PM";
			$hour -= 12;
			# code...
		} else if($hour == 12) {

			$meridian = "PM";
		}

		echo "<tr>";
		printf("<td>%02d:%02d %s</td>", $hour, $minutes, $meridian);
		echo '<td>&nbsp;</td>';
		echo "</tr>";
	}
}

echo "</table>";

?>