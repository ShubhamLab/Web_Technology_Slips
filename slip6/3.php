<?php
	$str1=$_POST['t1'];
	$str2=$_POST['t2'];
	$str3=$_POST['t3'];
	$str4=$_POST['t4'];
	$arr1=explode(" ",$str1);
	$arr2=explode(" ",$str2);
	$arr3=explode(" ",$str3);
	$arr4=explode(" ",$str4);
	echo "<table border=1>";
		echo "<tr>";
		echo "<th>ITEM CODE</th><th>ITEM NAME</th><th>PRICE</th><th>DESCRIPTION</th>";
		echo"</tr>";
		for($i=0;$i<5;$i++)
		{
			echo"<tr>";
			echo"<td>$arr1[$i]</td><td>$arr2[$i]</td><td>$arr3[$i]</td><td>$arr4[$i]</td>";
			echo "</tr>";
		}
	echo "</table>";
?>
