<?php
$n=$_POST['n1'];
if($n<=0)
{
	echo"Number should be positive and greater than 0";
	return false;
}
if($n>20)
{
	echo"please enter a number less than 20";
	return false;
}
if($n==1)
{
	echo " FACTORIAL = $n";
	return true;
}
else 
	fact($n);

function fact($n)
{
	$sum=1;
	while($n)
	{
		$sum=$sum*$n;
		$n--;
	}
	echo "Factorial=$sum";
}
?>
