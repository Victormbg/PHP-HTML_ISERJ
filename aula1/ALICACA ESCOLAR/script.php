<?php

if($_POST['tNome']==""  || $_POST['tNota1']==""  || $_POST['tNota2']==""){
	print "<font color='red'> Preencha os dados!</font>";
	exit;
}

function calcMediaInfor($Nota1,$Nota2){
	$media = ($Nota1+$Nota2)/2;
	return $media;
}

function calcMediaAdm($Nota1,$Nota2){
	$med = ($Nota1+$Nota2)/2;
	if($med > $Nota1)
		$Nota1=$med;
		$media = ($Nota1+$Nota2)/2;
	return $media;
}

function exibe($nom, $me, $cur, $dis){
	print "<font color='black' size='11'> Nome: </font>";
	print "<font color='red' size='11'>".$nom."<br/>";
	print "<font color='black'> Curso : </font>";
	print "<font color='red' size='11'>".$cur."<br/>";
	print "<font color='black'> Disciplina : </font>";
	print "<font color='red' size='11'>".$dis."<br/>";
	print "<font color='black'> Media Final : </font>";
	print "<font color='red' size='11'>".$me;
}

//recepão dos dados de entrada

$nome=$_POST['tNome'];
$nota1=$_POST['tNota1'];
$nota2=$_POST['tNota2'];
$disc=$_POST['Disc'];
$curso=$_POST['rbcurso'];

if ($curso=="Informática"){
$med=calcMediaInfor($nota1,$nota2);
exibe($nome,$med,$curso,$disc);	
}
else{
	$med=calcMediaAdm($nota1,$nota2);
exibe($nome,$med,$curso,$disc);		
}

?>