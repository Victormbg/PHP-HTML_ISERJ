<?php
/*Calcular o preço final do produto (preco X Quantidade acrescido do imposto de acordo com a aliquota abaixo:
Industrial : 35%
Comercial :  20%
Serviço  : 15%
Exibir: nome do produto, quantidade, preço total da compra, preço final com imposto
Usar função para o calculo das aliquotas separadamente.*/

$produto=$_GET["tNome"];
$preco=$_GET["tPreço"];
$quantidade=$_GET["tQuant"];
$radio=$_GET["rd1"];

if ($_GET["tNome"]=="" || $_GET["tPreço"]=="" || $_GET["tQuant"]=="" ){
	print "Os campos não foram preenchidos!";
}

/*as funçoes:*/
function calcindu($preco){
 $imposto=$preco*0.35;
 return $imposto;
}

function calcomerc($preco){
 $imposto=$preco*0.20;
 return $imposto;
}
function calcserv($preco){
	$imposto=$preco*0.15;
	return $imposto;
}
function exibe ($produto, $preco, $quantidade, $imposto){
		print ("Nome do produto: " . $produto);
		print ("<br>Preço do produto: ". $preco);
		print ("<br>Quantidade informada: " . $quantidade);
		print ("<br>Imposto acrescido: " . $imposto ."R$");
		print ("<br>Preço final do produto: ". ($preco+$imposto) ."R$" );
}

/*de acordo com  as opçoes*/	
if ($radio=="Industrial"){
	$imposto=calcindu($preco);
	exibe ($produto, $preco, $quantidade, $imposto);
    }else
    if ($radio=="Comercial"){
	    $imposto=calcomerc($preco);	
	    exibe ($produto, $preco, $quantidade, $imposto);
        }else
            if ($radio=="Serviço"){
            $imposto=calcserv($preco);
	        exibe ($produto, $preco, $quantidade, $imposto);
    	    }
        	
	    
	

?>