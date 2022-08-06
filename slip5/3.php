<?php
$arr1=array('1','2','3','4');
$arr2=array('10','20','30','40');
$a=$_POST['t1'];
$b=$_POST['t2'];
$op=$_POST['r1'];
switch($op)
{
	case "opt1":$len=count($arr1);
		array_splice($arr1,$len,0,$a);
		echo "ARRAY AFTER INSERTING ELEMENT IS :<br>";
		print_r($arr1);
		break;
	case "opt2":if($a!=""){
		$len=count($arr1);
		array_splice($arr1,$len,0,$a);
		$x=array_pop($arr1);
		echo "DELETED ELEMENT IS : $x ";}
		else
		{$x=array_pop($arr1);
		echo "DELETED ELEMENT IS : $x ";}	
		break;
	case "opt3":if($a!=""){
		$len=count($arr1);
		array_splice($arr1,$len,0,$a);
		$len=count($arr1);		
		echo "ARRAY ELEMENTS ARE :<br>";
		for($i=0;$i<$len;$i++)
			echo "$arr1[$i]";
		}
		else
		{
			$len=count($arr1);
			echo "ARRAY ELEMENTS ARE :<br>";
			for($i=0;$i<$len;$i++)
				echo "$arr1[$i]";	
		}
		break;
	case "opt4":
		array_splice($arr2,0,0,$b);
		echo "ARRAY AFTER INSERTING ELEMENT IS :<br>";
		print_r($arr2);
		break;
	case "opt5":if($b!=""){
		$len=count($arr2);
		array_splice($arr2,$len,0,$b);
		$x=array_shift($arr2);
		echo "DELETED ELEMENT IS : $x ";}
		else
		{$x=array_shift($arr2);
		echo "DELETED ELEMENT IS : $x ";}	
		break;
	case "opt6":if($b!=""){
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
	
<html>
<body><center>
<form method=POST>
**********STACK************<br>
ENTER THE ELEMENT TO INSERT IN THE STACK:<input type="textbox" name="t1"><br><br>
<input type="radio" name="r1" value="opt1">INSERT ELEMENT<br><br>
<input type="radio" name="r1" value="opt2">DELETE ELEMENT<br><br>
<input type="radio" name="r1" value="opt3">DISPLAY ELEMENTS<br><br>
-------------------------------------------------------------------------------------------------------<br>
**********QUEUE************<br>
ENTER THE ELEMENT TO INSERT IN THE QUEUE:<input type="textbox" name="t2"><br><br>
<input type="radio" name="r1" value="opt4">INSERT ELEMENT<br><br>
<input type="radio" name="r1" value="opt5">DELETE ELEMENT<br><br>
<input type="radio" name="r1" value="opt6">DISPLAY ELEMENTS<br><br>
<br><br>
<input type="submit" value="submit">
</form></center></body></html>
