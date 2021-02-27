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
			echo "<p>---------------------------</p>";
			echo "<p>Cehgou a hora! Lutador </p>".$this->getNome();
			echo "veio diretamente de ".$this->getNacionalidade();
			echo "tem ".$this->getIdade."anos e pesa ".$this->getPeso()." Kilos.";
			echo "<br/>Ele tem ".$this->getVitorias()."vitórias";
			echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empates";
		}
		function status (){
			echo "<p>---------------------------</p>";
			echo "<p>".$this->getNome()." é um peso ".$this->getNacionalidade();
			echo "e já ganhou ".$this->getVitorias()." vezes,";
			echo " perdeu ".$this->getDerrotas()." vezes e ";
			echo " empatou ".$this->getEmpates()." vezes!";
		}
		function ganharLuta (){
			$this->setVitorias($this->getVitorias() + 1);
		}
		function perderLuta (){
			$this->setDerrotas($this->getDerrotas() + 1);
		}
		function empatarLuta (){
			$this->setEmpates($this->getEmpates() + 1);
		}
		#métodos especiais
		function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->peso = $pe; 
			//categoria
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
			$this->setCategoria();
		}
		function setCategoria (){
			if ($this->peso < 52.2) {
				$this->categoria = "Inválido. Muito leve.";
			} elseif ($this->peso <= 70.3) {
				$this->categoria = "Leve";
			} elseif ($this->peso <= 83.9) {
				$this->categoria = "Médio";		
			} elseif ($this->peso <= 120.2) {
				$this->categoria = "Pesado";
			} else {
				$this->categoria = "Inválido";
			}
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