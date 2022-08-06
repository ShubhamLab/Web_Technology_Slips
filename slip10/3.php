<?php
$arr1=array(1,3,5,2);
$arr2=array(1,3,8);
$op=$_POST['r1'];
switch($op)
{
	case 1:echo "ARRAY first is :<br>";
		print_r($arr1);
		echo "ARRAY second is :<br>";
		print_r($arr2);
		$in=array_intersect($arr1,$arr2);
		echo "<br> Intersection is :  ";
		print_r($in);
		break;
	case 2:echo "ARRAY first is :<br>";
		print_r($arr1);
		echo "ARRAY second is :<br>";
		print_r($arr2);
		$u=array_merge($arr1,$arr2);
		$u=array_unique($u);
		echo "<br> Union is :  ";
		print_r($u);
		break;
	case 3:echo "ARRAY first is :<br>";
		print_r($arr1);
		echo "ARRAY second is :<br>";
		print_r($arr2);
		$d=array_diff($arr1,$arr2);
		echo "<br> Difference is :  ";
		print_r($d);
		break;
}
?>