<?php
$op=$_POST['t1'];
$r=$_POST['r'];
$s=$_POST['s'];
$l=$_POST['l'];
$b=$_POST['b'];
switch($op)
{
	case 1:define("pi",3.14);
		$sum=(pi*$r*$r);
		echo "Area of circle = $sum";
		break;
	case 2:$sum=($s*$s*$s*$s);
		echo "Area of square = $sum";
		break;
	case 3:$sum=(2*$l*$b);
		echo "Area of rectangle = $sum";
		break;
}
?>