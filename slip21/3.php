<?php
$day=$_POST["t1"];
switch($day)
{
	case 'monday':
			$bg_color="red";
			break;
	case 'tuesday':
			$bg_color="blue";
			break;
	case 'wednesday':
			$bg_color="pink";
			break;
	case 'thursday':
			$bg_color="gray";
			break;

	case 'friday':
			$bg_color="green";
			break;

	case 'saturday':
			$bg_color="black";
			break;

	case 'sunday':
			$bg_color="purple";
			break;
}	
echo "<div style='background-color: $bg_color'>Welcome to my Homepage</div>";
?>