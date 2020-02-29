<?php
function fechararq($nomeArq){
	fclose($ptarq);
}
function soLer($nomeArq){
	$ptArq = fopen($nomeArq, "r");
	if (!$ptArq){
		printf ("Impossivel abrir o arquivo.");
		exit;
	}else{
		while (!feof($ptArq){
			$char = fgets($ptArq);
			$pos = strpos($char, "#");
		$nome=substr($char,0,$pos);
		$linha=substr($char,$pos+1);
		//print "linha     ".$linha."<br>";
		$pos=strpos($linha,"#");
		$disc=substr($linha,0,$pos);
		}
	}
}