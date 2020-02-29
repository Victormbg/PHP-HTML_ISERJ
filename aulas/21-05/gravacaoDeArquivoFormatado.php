<?php
function fechararq($nomeArq){
	fclose($ptarq);
}
function soLer($nomeArq){
	$ptArq = fopen($nomeArq, "r");
	if (!$ptArq){
		printf ("Impossivel abrir o arquivo.");
		exit;
	}else{
		while(!feof($ptArq)){
			$char = fgets($ptArq);
			$pos = strpos($char, "#");
		$nome=substr($char,0,$pos);
		$linha=substr($char,$pos+1);
		//print "linha     ".$linha."<br>";
		$pos=strpos($linha,"#");
		$disc=substr($linha,0,$pos);
		$media=substr($linha, $pos+1);
	        if (feof($ptArq)==false){
		        print "<br>Nome: <font color='red'> ". $nome."<br></font>";
		        print "Disciplina: <font color='red'>". $disc."</font><br>";
		        print "Media:  <font color='red'>" . $media. "</font><br>";
		
	        }	
        }
    }
fclose($ptArq);
}

function Grava($nomeArq, $linha){
	$linha=$linha ."\n";
	if (!file_exists($nomeArq)){
		
		$ptArq=fopen($nomeArq, "w");
		fputs($ptArq, $linha);
		fclose($ptArq);
	}else{
		$ptArq=fopen($nomeArq, "a");
		fputs($ptArq, $linha);
		fclose($ptArq);
	}
print ("saindo...");	
}
$nomeArq="D:\Juliana\aluno.txt";
$linha="Maria Eduarda#WEB2#7,0";
Grava($nomeArq,$linha);
$linha="Raquel#Projeto#8,0";
Grava($nomeArq,$linha);
$linha="Ana Vitoria#LTP3#6,0";
Grava($nomeArq,$linha);
$linha="Pedro#LTP3#6,5";
Grava($nomeArq,$linha);
$linha="Vitoria#MD2#8,0";
Grava($nomeArq,$linha);
soLer($nomeArq);
?>