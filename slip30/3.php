<?php
$t=$_POST['t1'];
$size=strlen($t);
$r=array();
$flag=0;
for($i=0;$i<$size;$i++)
	array_push($r,$t[$i]);
for($i=0;$i<$size;$i++)
{
	if($t[$i]!=array_pop($r))
	{
		$flag=1;
		break;
	}
}	
if($flag)
	echo "String is not palindrome";
else
	echo "String is palindrome";
?>