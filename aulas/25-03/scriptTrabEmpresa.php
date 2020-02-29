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

if ($_GET["Emp"]=="" || $_GET["CNPJ"]=="" || $_GET["Fatu"]=="" ){
	print "Preencha os campos, animal.";
	exit;
}

 function calc1se($faturamento){
	$imposto=$faturamento*0.25;
	return $imposto;
 }
 function calc2se($faturamento){
	 $imposto=$faturamento*0.35;
	 return $imposto;
 }	
    
 function exibe ($empresa, $aliquota, $imposto){
		print ("Empresa: " . $empresa ."<br>");
		print ("Fatura: " . $aliquota ."<br>");
		print ("Imposto: " . $imposto ."<br>");
	}
	$cnpj=$_GET["CNPJ"];
    $empresa=$_GET["Emp"];
    $faturamento=$_GET["Fatu"];
	
	if ($faturamento<=250000){
	$imposto=calc1se($faturamento);
	$aliquota="25%";
	}else{
	$imposto=calc2se($faturamento);	
	$aliquota="35%";
	}
    exibe ($empresa, $aliquota, $imposto);
?>	