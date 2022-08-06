<?php
$str=$_POST['t1'];
function vow($s)
{
	$cnt=0;
	for($i=0;$i<strlen($s);$i++)
	{
		if($s[$i]=='a' || $s[$i]=='e' || $s[$i]=='i' ||$s[$i]=='o'||$s[$i]=='u')
			$cnt++;
	}
	if($cnt==0)
		echo "No vowels in the string";
	else
		echo "Count of vowels = $cnt";
}

vow($str);
?>




