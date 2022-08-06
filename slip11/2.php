<?php
$lstr=$_POST['t1'];	
$sstr=$_POST['t2'];
$rep=$_POST['t3'];
$op=$_POST['r1'];
switch($op)
{
	case 1:	$exp="/^$sstr/";
		$r=preg_match($exp,$lstr);
		if($r)
			echo "$sstr is present at the beginning of $lstr";
		else
			echo "$sstr is not present at the beginning of $lstr";					
		break;
	case 2: $exp="/^$sstr/";
		echo "LARGE STRING AFTER REPLACEMENT IS: ";
		$lstr=preg_replace($exp,$rep,$lstr);
		echo "<br>$lstr<br>";
		break;
}
?>
