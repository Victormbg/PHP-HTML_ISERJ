<?php
$codProd=$_GET['tCod'];
$descricao=$_GET['descricao'];
$quant=$_GET['tQuant'];
$preco=$_GET['tPreco'];
if($_GET['Pais'] != "NS")
	$pais = $_GET['Pais'];
	$taxa = $_GET['tTaxa'];
	include("Estrangeiro.php");
	$est = new Estrangeiro();
	
	$est->setCodProd($codProd);
	$est->setDescricao($descricao);
	$est->setQuant($quant);
	$est->setPreco($preco);
	$est->setPais($pais);
	$tipo="est";
	include("gravar_prod.php");
	
?>
