<?php
$lstr=$_POST['t1'];
$sstr=$_POST['t2'];
$opt=$_POST['r1'];
switch($opt)
{
	case "op1":echo "FIRST OCCURENCE IS AT POSITION : ";
		$f=strpos($lstr,$sstr);
		$f+=1;
		echo "$f";
		break;
	case "op2":echo "LAST OCCURENCE IS AT POSITION : ";
		$l=strrpos($lstr,$sstr);
		echo "$l"+1;
		break;
}
?>