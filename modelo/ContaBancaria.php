<?php
	class ContaBancaria{
		private $numero;
		private $tipo;
		private $saldo;
		private $banco;
		private $id;
		private $idUsr;

		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}

		public function getBanco(){
			return $this->banco;
		}
		public function setBanco($banco){
			$this->banco = $banco;
		}

		public function getIdUsr(){
			return $this->idUsr;
		}
		public function setIdUsr($idUsr){
			$this->idUsr = $idUsr;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>
