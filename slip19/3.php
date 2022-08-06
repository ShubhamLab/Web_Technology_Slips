<?php
$op=$_POST['t1'];
$r=$_POST['bs'];
$r=$_POST['h'];
$s=$_POST['s'];
$l=$_POST['l'];
$b=$_POST['b'];
switch($op)
{
	case 1:$sum=(($bs*$h)/2);
		echo "Area of triangle = $sum";
		break;
	case 2:$sum=($s*$s*$s*$s);
		echo "Area of square = $sum";
		break;
	case 3:$sum=(2*$l*$b);
		echo "Area of rectangle = $sum";
		break;
}
?>