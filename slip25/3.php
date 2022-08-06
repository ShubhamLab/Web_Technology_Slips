<?php
$v1=$_POST['val1'];
$v2=$_POST['val2'];
$op=$_POST['r1'];
require "3_2.php";
switch($op)
{
	case 1:add($v1,$v2);
		break;
	case 2:sub($v1,$v2);
		break;
	case 3:mult($v1,$v2);
		break;
	case 4:div($v1,$v2);
		break;
	case 5:mod($v1,$v2);
		break;
}
?>