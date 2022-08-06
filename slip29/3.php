<?php
$num=$_POST['n1'];
$size=strlen($num);
for($i=0;$i<$size;$i++)
{
	switch($num[$i])
	{
		case 0: echo "zero ";
			break;
		case 1: echo "One  ";
			break;
		case 2: echo "two  ";
			break;
		case 3: echo "three  ";
			break;
		case 4: echo "four  ";
			break;
		case 5: echo "five  ";
			break;
		case 6: echo "six  ";
			break;
		case 7: echo "seven  ";
			break;
		case 8: echo "eight  ";
			break;
		case 9: echo "nine  ";
			break;
	}
}
?>