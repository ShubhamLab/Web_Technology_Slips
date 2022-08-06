<?php
$n=$_POST['t1'];
fib($n);

function fib($n)
{
	$a=0;
	$b=1;
	echo "FIBONACCI SERIES IS :<br>";
	for($i=0;$i<$n;$i++)
	{
		echo "$a  ";
		$next=$a+$b;
		$a=$b;
		$b=$next;
	}
}