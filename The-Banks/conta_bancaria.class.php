<?php

	/**
	# Algoritmo 
	**/
	class ContaBanco {

		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;
		
 		public function abrirConta($t){
 			setTipo($t);
 			setStatus(true);

 			if ($t == "CC") {
 				setSaldo(50);
 			} elseif ($t == "CP") {
 				setSaldo(150);
 			}
 		}
 		public function fecharConta(){
 			if ($s > 0) {
 				echo "Conta com dinheiro, não pode ser fechada.";
 			} elseif ($s < 0) {
 				echo "Conta em débito";
 			}
 			setSatatus(false);
 		}
 		public function depositar(){

 		}
 		public function sacar(){

 		}
 		public function pagarMensal(){

 		}
 		// Métodos especiais
 		public function ContaBanco($st, $s){
			setStatus(false);
			setSaldo(0);
		}
 		public function setNumConta($nc){
 			$this->numConta = $nc;
 		}
 		public function getNumConta(){
 			return $nc;
 		}
 		public function setTipo($t){
 			$this->tipo = $t;
 		}
 		public function getTipo(){
 			return $t;
 		} 		
 		public function setDono($d){
 			$this->dono = $d;
 		}
 		public function getDono(){
 			return $d;
 		}
 		public function setSaldo($s){
 			$this->saldo = $s;
 		}
 		public function getSaldo(){
 			return $s;
 		}
 		public function setStatus($st){
 			$this->status = $st;
 		}
 		public function getStatus(){
 			return $st;
 		}
	}

?>


