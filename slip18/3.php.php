<?php
$a=$_POST['t1'];
fun($a);
function fun(&$a)
{
	$sum=1;
	while($a)
	{
		$sum*=$a;
		$a--;
	}
	echo "FACTORIAL = $sum";
}
	
?>
