<?php

public class Pessoa {
	private $codCli;
	private $endereco;
	
	function setCodCli($codCli){
		this->codCli = $codCli;
	}
	function setEndereco($endereco){
		this->endereco = $endereco;
	}
	function getCodCli(){
	return this->codCli;
	}
    function getEndereco(){
		return this->endereco;
	}
	
}

?>
