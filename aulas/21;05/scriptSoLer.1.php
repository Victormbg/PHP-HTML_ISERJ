<?php
function abrirLeitura($nomeArq){
	$modo="r";
	$ptArq=fopen($nomeArq,$modo);
}

function abrirGravar($nomeArq){
	$modo="w";
	$ptArq=fopen($nomeArq,$modo);
	if(!$ptArq){
		printf("Arquivo não pode ser aberto!");
		exit;
	}
	return $ptArq;
}

function abrirLerGravar($nomeArq){
	$modo="r+";
	$ptArq=fopen($nomeArq,$modo);
}

function fechararq($nomeArq){
	fclose($ptArq);
}

function soLer($nomeArq){
	$ptArq=fopen($nomeArq,"r");
	if(!$ptArq){
		printf("Impossivel abrir o arquivo");
		exit;
	}else{
		while(!feof($ptArq)){
			$char=fgets($ptArq);
			if($char=="\n"){
				echo "br";
			}else{
				print($char."<br>");
			}
		}
	}
	fclose($ptArq);
}

function Gravar($nomeArq){
		print("arq v ".$nomeArq);
		if(!file_exists($nomeArq)){
			$linha="linha 1\r\n";
			$linha.="linha 2\r\n";
			$linha.="linha 3\r\n";
			$linha.="linha 4\r\n";
			$linha.="linha 5\r\n";
			$ptArq=fopen($nomeArq,"w");
			fputs($ptArq,$linha);
			fclose($ptArq);
		}else{
			print(" saindo else");
			$linha="uma linha a mais \r\n";
			$ptArq=fopen($nomeArq,"a");
			fputs($ptArq,$linha);
			fclose($ptArq);
		}
print("saindo");
}
$nomeArq="D:/Victor/victor.txt";
Gravar($nomeArq);
soLer($nomeArq);
?>