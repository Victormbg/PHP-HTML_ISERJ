<?php
$razao = $_GET["razao"];
$cnpj = $_GET["cnpj"];
$fat = $_GET["fatur"];

function calc25($fat) {
	$imp = $fat * 0.25;
	return $imp;
}

function calc35($fat) {
	$imp = ($fat * 35) / 100;
	return $imp;
}

if($_GET["razao"]=="" || $_GET["cnpj"]=="" || $_GET["fatur"]==""){
	print "<h2>Preencha todas as entradas.</h2>";
	exit;
} else {
	if($fat<=250000) {
		print "<h2>Razão Social: </h2><h3>".$razao."</h3><br><h2> CNPJ: </h2><h3>".$cnpj."</h3><br><h2> Faturamento: </h2><h3>".$fat."</h3><br><h2> Imposto: </h2><h3>".calc25($fat)."</h3>";
	} else {
	    print "<h2>Razão Social: </h2><h3>".$razao."</h3><br><h2> CNPJ: </h2><h3>".$cnpj."</h3><br><h2> Faturamento: </h2><h3>".$fat."</h3><br><h2> Imposto: </h2><h3>".calc35($fat)."</h3>";
	}
}
?>