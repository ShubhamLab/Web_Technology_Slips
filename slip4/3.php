<?php
$op=$_POST['r1'];
$a=$_POST['t1'];
$b=$_POST['t2'];
switch($op)
{
	case '+' :$sum=$a+$b;
			echo "ADDITION OF GIVEN NUMBERS IS : $sum";
		  break;
	case '-' :$sum=$a-$b;
		echo "SUBSTRACTION OF GIVEN NUMBERS IS : $sum";
		  break;
	case '*' :$sum=$a*$b;
		echo "MULTIPLICATION OF GIVEN NUMBERS IS : $sum";
		  break;
	case '/' :$sum=$a/$b;
			echo "DIVISION OF GIVEN NUMBERS IS : $sum";
		  break;
}
?>