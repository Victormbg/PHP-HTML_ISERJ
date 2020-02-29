<?php
if ($_GET['tNome']=="" || $_GET['tNota1']=="" || $_GET ['tNota2']=="")
print "<font color='red'>Preencha todos os dados!";

//funções de resolução

function calcMediaInfo ($nota1,$nota2){	
 $media = ($nota1) + ($nota2) /2;
 return $media;
}
function calcMediaAdm ($nota1,$nota2){	
    
	 $med = ($nota1 + $nota2) /2;
     if ($med > $nota1)
		 $nota1=$med;
     $media = ($nota1 + $nota2 /2);
	 return $media;
	 
}

function exibe ($nome, $med, $curso, $dis ){
	print "<font color ='black'>Nome : </font>";
	print "<font color ='red' size='14'>".$nome."<br>";
	print "<font color ='black' >Curso: </font>";
	print "<font color ='red' size='14'>".$curso."<br>";
	print "<font color ='black' >Disciplina: </font>";
	print "<font color ='red' size='14'>".$dis."<br>";
	print "<font color ='black' >Media Final: </font>";
	print "<font color ='red' size='14'>".$med."<br>";
}

//recepção dos dados de entrada

$nome=$_GET['tNome'];
$nota1=$_GET['tNota1'];
$nota2=$_GET['tNota2'];
$disc=$_GET['disc'];
$curso=$_GET['rbcurso'];
	if($curso=="Informatica"){
		$med=calcMediaInfo($nota1,$nota2);
		exibe($nome,$med,$curso,$disc);
	}
	if($curso=="Administração"){
		$med=calcMediaAdm($nota1,$nota2);
		exibe($nome,$med,$curso,$disc);
	}

	
	
	
?>




















