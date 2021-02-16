<?php

	/**
	**/

	class Caneta {
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;
 
		public function rabiscar() {
			if ($this->tampada == true) {
				echo "ERRO! Não posso rabiscar!";
			} else {
				echo "Estou rabiscando...";
			}
			
		}

		public function tampar() {
			$this->tampada = true;
		}
		
		private function destampar() {
			$this->tampada = false;
		}

	}

?>