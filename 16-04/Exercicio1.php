<?php
if ($_GET['especialidade']==""){
	print "Especifique uma especialidade.";
    exit;
}

$proc = $_GET['especialidade'];

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

for($i=0;$i<=8;$i++)
  for ($j=$i+1;$j<=9;$j++)
	if ($especialidade[$i] > $especialidade[$j]){
	   $aux = $especialidade[$i];
	   $especialidade[$i] = $especialidade[$j];
	   $especialidade[$j] = $aux;
    }
	/*for ($j=0;$j<10;$j++)
		print "<br>" . $especialidade[$j]. "<br>"; */
    $i=0;
	$find=false;
	 while($i<=9 && $find==false){
	    if ($especialidade[$i]==$proc){
		   $find = true;
	    }else{
	      $i++;
	    }
	 }
    if($find==false){
	   $mensagem = $proc. " não existe neste hospital.";
    }else{
	   $mensagem = $proc.  " se encontra no ". ($i+1) ."º andar";
	} 	
  

?>

<?php 
include ("formExibe.php"); 
?>