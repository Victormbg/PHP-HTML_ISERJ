<?php
//Att 26/02/2019
//recepção dos dados de entrada
$nome=$_GET['tNome'];
$nota1=$_GET['tNota1'];
$nota2=$_GET['tNota2'];
$disc=$_GET['Disc'];
$curso=$_GET['rbcurso'];

if ($curso=="Informática"){
	$med=calcMediaInfo($nota1, $nota2);
	exibe($nome,$med,$curso,$disc);
} else{
	$med=calcMediaInfo($nota1, $nota2);
	exibe($nome,$med,$curso,$disc);
}



if ($_GET['tNome']=="" || $_GET['tNota1']=="" || $_GET['tNota2']==""){
	print "<font color='red'> Preencha todos os campos! </font>";
	exit;
}
	//funções de resolução
	function calcMediaInfo ($nota1,$nota2){
		$media = ($nota1 + $nota2)/2;
		return $media;
}
    function calcMediaAdm ($nota1,$nota2){
	$med = ($nota1 + $nota2)/2;
	if ($med > $nota1)
		$nota1=$med;
	return $media;
}
function exibe ($nom, $me, $cur, $dis){
	print "<font color='black'> Nome: </font>";
	print "<font color='red'>" . $nom . "<br>";
	print "<font color='black'> Curso: </font>";
	print "<font color='red'>" . $cur . "<br>";
	print "<font color='black'> Disciplina: </font>";
	print "<font color='red'>" . $dis . "<br>";
	print "<font color='black'> Media Final: </font>";
	print "<font color='red'>" . $me . "<br>";
}






/* ------------------------------------------------------------------------------------------------------------------------------------------------------
Regra para fazer o script de solução do problema:
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
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
?>
