<?php
/* 
Regra: 
O botão calcular deve calcular o IRPJ - Imposto de Renda de Pessoa Jurídica usando
a seguinte regra:
Faturamento até 250.000 - aliquota de 25%
      ||    acima de 250.000 ||    de 35%
Exiba: o imposto e o faturamento líquido 
Faturamento é quanto a empresa arrecada com a venda de bens e serviços.
Faturamento Líquido -> é quanto resta para empresa, desconto de imposto, empregados. luz, gás, etc.
Aliquota é p % de imposto.
*/

$cnpj=$_GET["trCNPJ"];
$empresa=$_GET["trEmp"];
$faturamento=$_GET["trFat"];

if ($_GET["trEmp"]=="" || $_GET["trCNPJ"]=="" || $_GET["trFat"]=="" ){
	print "Preencha os campos, animal."
}

if ($faturamento<=250000){
	
    function calcmenor($faturamento){
	$imposto=$faturamento*0.25;
	return $imposto;
	}

	$imposto=calcmenor($faturamento)
	
	function exibe ($empresa, $fatliquido, $imposto){
		print ("Empresa " . $empresa);
		print ("<br> faturou " . $fatliquido);
		print ("<br> pagou imposto de " . $imposto);
	}
	
	