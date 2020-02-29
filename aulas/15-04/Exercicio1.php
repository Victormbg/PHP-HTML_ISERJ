<?php
if ($_GET['especialidade']==""){
	print "Especifique uma especialidade.";
    exit;
}
$proc = $GET['especialidade'];

$especialidade[0]= "Ortopedia";
$especialidade[1]= "Cardiologia";
$especialidade[2]= "Cirurgia Cardiovascular";
$especialidade[3]= "Clínica Médica";
$especialidade[4]= "Dermatologia";
$especialidade[5]= "Endocrinologia";
$especialidade[6]= "Endoscopia";
$especialidade[7]= "Gastroenterologia";
$especialidade[8]= "Infectologia";
$especialidade[9]= "Radioterapia";

$logico = false;
$i=0; 
$j=0;
$aux="";

for($i=0;$i<=8;$i++){
  for ($j=$i+1;$j<=9;$j++){
	if ($find > $proc){
	$aux = $especialidade[$i];
	$especialidade[$i] = $especialidade[$j];
	$especialidade[$j] = $aux;
    }
    $i=0;
	 while($i<=9 && $find=false){
	    if ($especialidade[$i]==$proc){
		$find = true;
	    }else{
	$i++;
	}
    if($find==false){
	print ("A especialidade " .$mensagem = $proc. " não existe neste hospital.");
    }else{
	print ("A especialidade " .$mensagem = $proc.  " se encontra no ". $i ."º andar");
	} 	
  }
}}
?>

<?php 
include ("formExibe.php"); 
?>