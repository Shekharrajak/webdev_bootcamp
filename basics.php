<?php 

echo "<center>Web dev Bootcamp 2015</center><br>";
$temp="I am a temp php variable variable<br>";
echo $temp;

$num1=2;
$num2=5;

echo "sum of ".$num1."and ".$num2." is ".($num1+$num2)."<br>";

echo "Today's date and current time ".date("Y-m-d h:m");
echo "<br>";
$i=0;
print("printing numbers in pattern<br>");
while($i <= 5){
	$j=0;
	 while($j < $i){
      echo $j."   ";
	  $j++;
	}
	$i++;
	echo "<br>";
}



?>









