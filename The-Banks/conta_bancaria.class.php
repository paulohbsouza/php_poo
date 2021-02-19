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
 			if ($sd > 0) {
 				echo "Conta com dinheiro, não pode ser fechada.";
 			} elseif ($sd < 0) {
 				echo "Conta em débito";
 			}
 			setSatatus(false);
 		}
 		public function depositar($vl){
 			if ($st = true) {
 				setSaldo(getSaldo() + $vl);
 			} else {
 				echo "Impossível fazer depósito";
 			}
 		}
 		public function sacar($vl){
 			if ($st = true) {
 				if ($sd > 0) {
 					setSaldo(getSaldo() - $vl);
 				} else {
 					echo "Saldo insuficiente.";
 				}
 			} else {
 				echo "Impossível sacar.";
 			}
 		}
 		public function pagarMensal(){
 			$v_m = 0;
 			if ($t == "CC") {
 				$v_m = 12;
 			} elseif ($t == "CP") {
 				$v_m = 20;
 			}
 			if ($st = true) {
 				if ($sd > $v_m) {
 					setSaldo(getSaldo() - $v_m);
 				} else {
 					"Saldo insuficiente.";
 				}
 			} else {
 				echo "Impossível pagar.";
 			}
 		}

 		// Métodos especiais
 		public function ContaBanco($st, $sd){
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
 		public function setSaldo($sd){
 			$this->saldo = $sd;
 		}
 		public function getSaldo(){
 			return $sd;
 		}
 		public function setStatus($st){
 			$this->status = $st;
 		}
 		public function getStatus(){
 			return $st;
 		}
	}

?>


