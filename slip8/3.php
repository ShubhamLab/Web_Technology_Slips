<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$cnt=create_function('$a,$b,$c,$d,$e','return (($a+$b+$c+$d+$e)/5);');
$m=$cnt($a,$b,$c,$d,$e);
echo " MEAN =$m";
?>