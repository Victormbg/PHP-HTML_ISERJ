<?php
$clube[0] = "VAS";
$clube[1] = "OLA";
$clube[2] = "PORT";
$clube[3] = "FLA";
$clube[4] = "AMC";
$Poct="PORT";
$i=0;
$Logico=False;
while($i<=4 && $achou=False)
	if($clube==$poct)
		$achou=true;
	else
		$i++;
	if($achou==false)
		print ($Poct."<br>Não existe");
	else
		print($Poct."Na posição".$i);

?>


