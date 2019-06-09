<?php

	if($_GET['Temp']="" || $_GET['tCNPJ']="" || $_GET['tFAT']=""){
	prit("Preencha todos os valores!");
	exit;}
	
		function calcular($FAT){
		$IMP = $FAT*0.25;
		return $IMP;}
		
		function exibe($IMP,$FATLIQ,$IMP){
			print("Empresa".$IMP);
			print("<br>Faturou".$FATLIQ);
			print("<br>Pagou Imposto de ".$IMP);}
			
	$IMP=$_GET['Temp'];
	$FAT=$_GET['tFAT'];
	$CNPJ=$_GET['tCNPJ'];
	if($FAT<=250000)
		$IMP=calcmenor($FAT);
	