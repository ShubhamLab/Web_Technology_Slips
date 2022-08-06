<?php
$str=$_POST['t1'];
$cnt=0;
echo "Vowels are : ";
for($i=0;$i<strlen($str);$i++)
{
	if($str[$i]=='a' ||$str[$i]=='e' ||$str[$i]=='i' ||$str[$i]=='o' ||$str[$i]=='u' )
	{
		echo " $str[$i] ";
		$cnt++;
	}
}
if($cnt==0)
	echo "No VOWELS IN THE STRING";
?>