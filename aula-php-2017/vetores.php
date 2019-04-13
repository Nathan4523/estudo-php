<?php 


$x = array(3,2,5);
$x[] = 7;

print_r($x); 

echo "<br>";

$a = array(
			array(6,1), 
			array(2,0),
			array(9,5));
	
	$a[1] [0] = $a[2] [1];
	print_r($a);
 ?>