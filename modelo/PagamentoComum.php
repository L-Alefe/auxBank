<?php
	class PagamentoComum{
		private $valor;
		private $id;
		private $prazo;
		private $titulo;
		private $idUsr;
		private $importante;
		private $numeroCartao;

		public function getValor(){
			return $this->valor;
		}
		public function setValor($valor){
			$this->valor = $valor;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}

		public function getPrazo(){
			return $this->prazo;
		}
		public function setPrazo($prazo){
			$this->prazo = $prazo;
		}

		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getIdUsr(){
			return $this->idUsr;
		}
		public function setIdUsr($idUsr){
			$this->idUsr = $idUsr;
		}
	
		public function getImportante(){
			return $this->importante;
		}
		public function setImportante($importante){
			$this->importante = $importante;
		}

		public function getNumeroCartao(){
			return $this->numeroCartao;
		}
		public function setNumeroCartao($numeroCartao){
			$this->numeroCartao = $numeroCartao;
		}
	}
?>
