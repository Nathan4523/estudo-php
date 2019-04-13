<?php 

class Mouse{
	var $tipo;
	var $cor;
	var $tamanho;
	var $jogo;
	var $atual;
	var $marca;



	function status(){
		// echo "O mouse é da marca ".$marca. " com a cor ". $this->$cor. " e com o tamanho: ". $this->$tamanho;
		// echo "<br><br>";
		// echo "O mouse tem a sua modalidade como ". $this->$atual. " e é de: ". $this->$jogo;

		echo "O mouse é da marca ".$marca. " com a cor ".$cor. " e com o tamanho: ". $tamanho;
	echo "<br><br>";
	echo "O mouse tem a sua modalidade como ". $atual. " e é de: ". $jogo;
	}
}

 ?>