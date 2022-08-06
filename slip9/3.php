<?php
$arr2=array('10','20','30','40');
$b=$_POST['t2'];
$op=$_POST['r1'];
switch($op)
{
	case "opt1":
		array_splice($arr2,0,0,$b);
		echo "ARRAY AFTER INSERTING ELEMENT IS :<br>";
		print_r($arr2);
		break;
	case "opt2":if($b!=""){
		$len=count($arr2);
		array_splice($arr2,$len,0,$b);
		$x=array_shift($arr2);
		echo "DELETED ELEMENT IS : $x ";}
		else
		{$x=array_shift($arr2);
		echo "DELETED ELEMENT IS : $x ";}	
		break;
	case "opt3":if($b!=""){
		$len=count($arr2);
		array_splice($arr2,$len,0,$b);
		$len=count($arr2);		
		echo "ARRAY ELEMENTS ARE :<br>";
		for($i=0;$i<$len;$i++)
			echo "$arr2[$i]";
		}
		else
		{
			$len=count($arr2);
			echo "ARRAY ELEMENTS ARE :<br>";
			for($i=0;$i<$len;$i++)
				echo "$arr2[$i]";	
		}
		break;
}
?>
	
