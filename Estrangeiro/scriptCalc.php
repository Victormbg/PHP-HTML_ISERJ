<?php
$codProd=$_GET['tCod'];
$descricao=$_GET['tDesc'];
$quant=$_GET['tQuant'];
$preco=$_GET['tPreco'];
print "dscricao ". $_GET['Funcoes'];
if ($_GET['Funcoes']=="Cad")
  if ($_GET['Pais'] != "NS") {
   $pais = $_GET['Pais'];
   $taxa = $_GET['tTaxa'];
   include("Estrangeiro.php");
   $est = new Estrangeiro();  // Instanciar a classe
   
   $est->setCodProd($codProd);
   $est->setDescricao($descricao);
   $est->setCodProd($codProd);
   $est->setDescricao($descricao);
   $est->setQuant($quant);
   $est->setPreco($preco);
   $est->setPais($pais);
   $est->setTaxa($taxa);
   $tipo="est";
   Include("gravar_prod.php");
   grava($est->getCodProd(),$est->getDescricao(),$est->getQuant(),$est->getPreco(),$est->getPais(),$est->getTaxa(),$tipo);
   
	

}else{
   include("Nacional.php");
   $estado=$_GET['Estados'];
   $aliquota=$_GET['tAli'];
   $est = new Nacional();  // Instanciar a classe
   $est->setCodProd($codProd);
   $est->setDescricao($descricao);
   $est->setQuant($quant);
   $est->setPreco($preco);
   $est->setEstado($estado);
   $est->setAliquota($aliquota);
   $tipo="nac";
   Include("gravar_prod.php");
   grava($est->getCodProd(),$est->getDescricao(),$est->getQuant(),$est->getPreco(),$est->getEstado(),$est->getAliquota(),$tipo);
   
	
}
else
	if ($_GET['Funcoes']=="Recup")
	 Include("gravar_prod.php");	
	 recupera($descricao);
?>