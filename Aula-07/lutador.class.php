<?php

	/**
	 * 
	 */
	class Lutador {
		#atributos
		private $nome;
		private $nacionalidade;
		private $idade, $altura, $peso;
		private $categoria, $vitorias, $derrotas, $empates;
		#métodos
		function apresetar (){

		}
		function status (){

		}
		function ganharLuta (){

		}
		function perderLuta (){

		}
		function empatarLuta (){

		}
		#métodos especiais
		function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->peso = $pe; categoria
			$this->vitorias = $vi;
			$this->derrotas = $de;
			$this->empates = $em;
		}
		#métodos geters e seters
		function getNome (){
			return $this->nome = $nome;
		}
		function getNacionalidade (){
			return $this->nacionalidade = $nacionalidade;
		}
		function getIdade (){
			return $this->idade = $idade;
		}
		function getAltura (){
			return $this->altura = $altura;
		}
		function getPeso (){
			return $this->peso = $peso;
		}
		function getCategoria (){
			return $this->categoria = $categoria;
		}
		function getVitorias (){
			return $this->vitorias = $vitorias;
		}
		function getDerrotas (){
			return $this->derrotas = $derrotas;
		}
		function getEmpates (){
			return $this->empates = $empates;
		}
		function setNome ($nome){
			$this->nome = $nome;
		}
		function setNacionalidade ($nacionalidade){
			$this->nacionalidade = $nacionalidade;
		}
		function setIdade ($idade){
			$this->idade = $idade;
		}
		function setAltura ($altura){
			$this->altura = $altura;
		}
		function setPeso ($peso){
			$this->peso = $peso;
		}
		function setCategoria ($categoria){
			$this->categoria = $categoria;
		}
		function setVitorias ($vitoria){
			$this->vitorias = $vitorias;
		}
		function setDerrotas ($derrotas){
			$this->derrotas = $derrotas;
		}
		function setEmpates ($empates){
			$this->empates = $empates;
		}
	}

?>