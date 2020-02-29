<?php

	class Funcionario{
		var $codfunc;
		var $nome;
		
		public function setCodFunc($cod) {
			$this->setCodFunc = $cod;
		}
		
		public function getCodFunc() {
			return $this->codfunc;
		}
		
		public function setNomeFunc($nome) {
			$this->setNomeFunc = $nome;
		}
		
		public function getNomeFunc() {
			return $this->nome;
		}
	}

?>
