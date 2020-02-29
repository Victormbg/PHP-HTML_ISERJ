<?php
/* Regra para fazer o script de solução do problema:
Escrever um script que calcule a média final, segundo a seguinte regra:
Para o curso de Informática: média aritmética das notas.
Para o curso de Administração: A méduia da 1º etapa será substituída pela média aritmética se a média for maior. 
SubRotina - O que é?
R: Consiste em dividir um programa em vários pedaços.
- Por que isso é bom?
R:Uma subrotina é estática: Só entra em ação se for chamada.
Isso é bom porque só carrega o que vou usar no momento, economizando recurso de computação.
- Rotinas menores geral códigos menores, diminuindo o grau de complexividade das rotinas.
- Programas mais legiveis.
- Programa compartilhavel, reusavel.
- Uma subrotina pode receber e devolver informação, denominado parâmetro.
*/

$Nota1_$GET["tNota1"];
$Nota2_$GET["tNota2"];
$Nome_$GET["tNome"];

if ($_GET['tNome']=="" || $_GET['tNota1']=="" || $_GET['tNota2']=="") 
	print "<font color='red'> Preencha todos os campos>"
	//funções de resolução
	function calcMediaInfo ($Nota1,$Nota2){
		$media = ($Nota1 + $Nota2)/2;
		return $media;
}
function calcMediaAdm ($Nota1,$Nota2){
	$med = ($Nota1 + $Nota2)/2;
	if ($med > $Nota1)
		$Nota1=$med;
	return $media;
}

?>
