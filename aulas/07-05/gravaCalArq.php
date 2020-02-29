<?php
/*Gravação de arquivo de texto.
- Fixo
- Variável

O texto na TV, é o protótipo de leitura e gravação de arquivo  de texto.

HIGH LIGHT DE ARQUIVO
Para abrir arquivo
$ptArq = fopen ($nomeArq, $modo)

FOPEN = comando qie significa arbri arquivo apontado pelo nomeArq que contém o endereço,
o drive e da pasta, onde será colocado arquivo.

MODO = É o ... de manipulação do arquivo. Esta informação é muito importante.

pode ser:
w: gravação, se o arquivo existir será: Apagado.
r: Leinaa, abre um arquivo existente para ler.
a: apend, abre um arquivo existente, permitindo anexar novas linhas, após a última, preservando as anteriores.

_______________________________________________________________________
*/
$nome="octacilio";
$funcao="professor";
$sal="10000";
$depto="Info";

function abrirLeitura ($nomeArq){
	$modo="r";
	$ptArq = fopen ($nomeArq, $modo);
}
function abrirGravar ($nomeArq){
	$modo="w";
	$ptArq = fopen ($nomeArq, $modo);
	if(!$ptArq){

printf ("arquivo não pode ser aberto!");
 exit;
 }
 return $ptArq;
}
function abrirLerGravar($nomeArq){
	$modo="r+";
	$ptArq = fopen ($nomeArq, $modo);
}
function fecharArq ($nomeArq){
	fclose($ptArq);
}
function soLer($nomeArq){
	$ptArq = fopen ($nomeArq, "r");
	if(!$ptArq){
		printf ("Impossível abrir o arquivo");
		exit;
		
}else{
	while (!feof($ptArq)){
		$char = fgets($ptArq);
		if($char=="\n")
			echo "br"; //navegador não 
		else
			print ($char. "<br>");
	}
}
fclose($ptArq);
}
function Grava($nomeArq){
	print ("arq" . $nomeArq);
	if(!file_exists($nomeArq)){
		
		$linha = "linha 1\r\n";
		$linha = "linha 2\r\n";
		$linha = "linha 3\r\n";
		$linha = "linha 4\r\n";
		$linha = "linha 5\r\n";
		$ptArq = fopen($nomeArq, "w");
		fputs($ptArq, $linha);
		fclose($ptArq);
    }else{
		print ("saindo else");
		$linha = "uma linha a mais\r\n";
		$ptArq = fopen($nomeArq, "a");
		fputs ($ptArq, $linha);
		fclose ($ptArq);
	
    } 
	print("saindo");
}
$nomeArq = "C:\Octa\octa.txt";
Grava ($nomeArq);
soLer ($nomeArq);
//int strlen (string $string);
//$lenght = strlen (utf8_decode($s));
//string substr (string $string, int $start [, int ] );
?>