<?php

	/**
	 * 
	 */
	require_once 'controlador.interf.php';

	class ControleRemoto implements Controlador {

		//atributos
		private $volume;
		private $ligado;
		private $tocando;

		//métodos especiais
		function __construct(){
			$this->volume = 50;
			$this->ligado = false;
			$this->tocando = false;
		}
		function setVolume($volume){
			$this->volume = $volume;
		}
		function setLigado($ligado){
			$this->ligado = $ligado;
		}
		function setTocando($tocando){
			$this->tocando = $tocando;
		}
		function getVolume(){
			return $this->volume;
		}
		function getLigado(){
			return $this->ligado;
		}
		function getTocando(){
			return $this->tocando;
		}

		public function ligar(){
			$this->setLigado(true);
		}
		public function desligar(){
			$this->setLigado(false);
		}
		public function abrirMenu(){
			echo "<br/>Está ligado?: ".($this->getLigado()?"SIM":"NÃO");
			echo "<br/>Está tocando?: ".($this->getTocando()?"SIM":"NÃO");
			echo ....
		}
		public function fecharMenu(){

		}
		public function maisVolume(){

		}
		public function menosVolume(){

		}
		public function ligarMudo(){

		}
		public function play(){

		}
		public function pause(){

		}

	}

?>