<?php
$clube[0]= "Vasquinho <br>";
$clube[1]= "Olaria <br>";
$clube[2]= "Portuguesa <br>";
$clube[3]= "Flamerda <br>";
$clube[4]= "America <br>";

$proc = "Portuguesa"; $i=0;
$logico = false;
while($i<=4 && $achou=false){
	if ($clube==$proc){
		$achou = true;
	}else{
	$i++;
	}
}	
    if($achou==false){
	print ($proc. " não existe.");
	}else{
	print ($proc. " na posição". $i);
	}
?>	