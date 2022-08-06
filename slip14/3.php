<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$min=create_function('$a,$b,$c','return (($a<$b)?(($a<$c)?$a:$c):(($b<$c)?$b:$c));');
$r=$min($a,$b,$c);
echo "Minimum = $r";
?>