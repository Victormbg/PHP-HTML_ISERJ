<?php
if($_POST['proc']==""){
	echo "<font size='5' color='red'>Preencha o campo!</font>";
	exit;
}

$clube[1] = "Ortopedia";
$clube[2] = "Cardiologia";
$clube[3] = "Pediatria";
$clube[4] = "Raio-X";
$clube[5] = "Coloproctologia";
$clube[6] = "Dermatologia";
$clube[7] = "Endocrinologia";
$clube[8] = "Gastroenterologia";
$clube[9] = "Cirurgia Estomagal";
$clube[10] = "Cirurgia plástica";

$i=0; $j=0; $ach=false; $aux=""; $proc=$_POST['proc']; 

for($i<=8;$i++;)
	for($j=$i+1;$j<=9;$j++)
		if($clube[$i]>$clube[$j]){
		  $aux=$clube[$i];
		  $clube[$i]=$clube[$j];
		  $clube[$j]=$aux;
	}

while($i<=9 && $ach==false){
	if($clube[$i]==$proc){
		$ach=true;
	}else{
		$i++;
	}
}
if($ach==true){
	$mens = "O ".$proc." se encontra no andar ".$i;
}else{
	$mens = $proc." não foi encontrado";
}
?>
<?php include("exibe.php");?>