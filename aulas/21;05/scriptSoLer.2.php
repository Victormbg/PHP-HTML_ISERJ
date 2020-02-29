<?php
function fechararq($nomeArq){
	fclose($ptarq);
}
function soLer($nomeArq){
	$ptArq=fopen($nomeArq,"r");
	if(!$ptArq){
		printf("Impossível abrir o arquivo!");
		exit;
	}else{
		while(!feof($ptArq)){ //feof marca como verdadeiro se tiver dados para ler, se não tiver é false
			$char=fgets($ptArq);// Lê uma linha de um ponteiro de arquivo
			$pos=strpos($char,"#");
			$nome=substr($char,0,$pos);
			$linha=substr($char,$pos+1);
			$pos=strpos($linha,"#");
			$disc=substr($linha,0,$pos);
			$media=substr($linha,$pos+1);
			if(feof($ptArq)==false){
				print "<br>Nome: <font color='red'> $nome <br></font>";
				print "Disciplina: <font color='red'> $disc <br></font>";
				print "Media: <font color='red'> $media <br></font>";
				
		}
	}
}
	fclose($ptArq);//fecha o arquivo que abriu
}

function Grava($nomeArq,$linha){
		$linha=$linha."\n";
		if(!file_exists($nomeArq)){
		$ptArq=fopen($nomeArq,"w");
		fputs($ptArq,$linha);
		fclose($ptArq);
}else{
		$ptArq=fopen($nomeArq,"a");
		fputs($ptArq,$linha);
		fclose($ptArq);
}
	print("saindo");
}
$nomeArq="D:/Victor/victor.txt";
$linha="Maria Eduarda#WEB II#7,0";
Grava($nomeArq,$linha);
$linha="Raquel#Projeto#8,0";
Grava($nomeArq,$linha);
$linha="Ana Vitoria#LP3#6,0";
Grava($nomeArq,$linha);
$linha="Pedro#LP3#6,5";
Grava($nomeArq,$linha);
$linha="Vitoria#MD II#8,0";
Grava($nomeArq,$linha);
soLer($nomeArq);
?>