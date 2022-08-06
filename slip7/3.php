<?php
$arr=array("aaa"=>10,"bbb"=>20,"ccc"=>6);
$op=$_POST['option'];
switch($op){
case "opt1":
		print_r($arr);
	break;
case "opt2":$size=count($arr);
		echo "SIZE OF THE ARRAY\n";
		print_r($size);
		break;
case "opt3":$del=$_POST['t1'];
	unset($arr[$del]);
	print_r($arr);
	break;
}
?>
