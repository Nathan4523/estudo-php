<?php 

class Caneta {
	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampa;


	function rabiscar(){

		if($this->tampa == true){
			echo "ERRO! Não posso rabiscar";
		} else{
			echo "estou rabiscando";	
		}

		echo "<br>Sou uma caneta";
	}

	function tampar(){
		$this->tampa = true;
	}

	function destampar(){
		$this->tampa = false;
	}
}

 ?>