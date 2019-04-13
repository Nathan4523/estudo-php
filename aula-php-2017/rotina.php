<?php 

function soma($a, $b){
	$c = $a + $b;
	echo $c;
}


//com return
function sub($d, $e){
	$z = $d - $e;
	return $z;
}


//primeiro parametro
soma(3,4);
echo "<br>";
soma(5,7);
echo "<br>";
$x = 8;
$y = 7;
soma($x, $y);
echo "<br>";
sub($x, $y);
 ?>





 <?php 

function ver(){
	$p = func_get_args();
	$tot = func_num_args();
	$s = 0;

	for ($i=0; $i < $tot ; $i++) { 
		$s += $p[$i];
	}
	return $s;
}


$res = ver(1,2,3,4,5,6);

echo "a soma dos valores e: " . $res;


  ?>