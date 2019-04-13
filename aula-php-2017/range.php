<?php 

	$c = range(5,20,5);

	foreach ($c as $v) {
		echo "<br>$v <br>";
	}


	$a = array(1=> 'Nicolas Nathan Campos', 2 => 19, 3=> "programador" );
	$a[] = "É lindo";

	echo "<br>";
	foreach ($a as $key => $c) {
		echo "O " .$a[1] . " tem ". $a[2]. " anos ". " e tambem é ". $a[3]. "<br>";

	}
 ?>