<?php
$l=$_POST['t1'];
$s=$_POST['t2'];
$r=$_POST['t3'];
$op=$_POST['r1'];
switch($op)
{
	case 1:$f=strpos($l,$s);
		echo "First occurrence is at position : $f";
		break;
	case 2:$f=strrpos($l,$s);
		echo "Last occurrence is at position : $f";
		break;
	case 3:$c=str_replace($s,$r,$l);
		echo "Replaced string is : $c";
		break;
}
?>