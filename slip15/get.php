<?php
$a=$_POST['t1'];
echo "<br>STRING BEFORE IS : ";
print_r($a);
$vowels=array('a','e','i','o','u','A','E','I','O','U');
$a=str_replace($vowels,"",$a);
echo "<br>STRING AFTER REMOVING VOWELS IS : ";
print_r($a);
?>