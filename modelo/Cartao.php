<?php
	class Cartao{
		private $numero;
		private $limite;
		private $idUsr;
		private $id;

		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getIdUsr(){
			return $this->idUsr;
		}
		public function setIdUsr($idUsr){
			$this->idUsr = $idUsr;
		}

		public function getLimite(){
			return $this->limite;
		}
		public function setLimite($limite){
			$this->limite = $limite;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>
