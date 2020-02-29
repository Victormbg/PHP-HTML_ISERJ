<?php

function recuperar($nomeArq,$proc){
$achou=false;
$ptArq= fopen($nomeArq,"r");
if(!$ptArq){
  printf("impossivel abrir o arquivo");
  exit;
}else{
   while(!feof($ptArq) && $achou==false) {
	   $char =fgets($ptArq);
	   $pos=strpos($char,"#");	 
	$cod=substr($char,0,$pos);
	$linha=substr($char,$pos+1);
	
	$pos=strpos($linha,"#");
	$nome=substr($linha,0,$pos);
	if ($nome==$proc)
		$achou=true;
   }	
	$linha=substr($linha,$pos+1);
	$pos=strpos($linha,"#");
	$quant=substr($linha,0,$pos); 
	$linha=substr($linha,$pos+1);
	$pos=strpos($linha,"#");
	$preco=substr($linha,0,$pos);
	$linha=substr($linha,$pos+1);
	$pos=strpos($linha,"#");
	$local=substr($linha,0,$pos);
	$linha=substr($linha,$pos+1);
	$pos=strpos($linha,"#");
	$tarifa=substr($linha,0,$pos);
	$linha=substr($linha,$pos+1);
	$tipo=$linha;
	
  if (feof($ptArq)==false) {
      	 print("<br>cod : <font color='red'> ". $cod."<br></font>");
	     print "nome :<font color='red'> ". $nome."</font><br>";
         print "quant  : <font color='red'>". $quant."</font><br>";
		 print "preco  : <font color='red'>". $preco."</font><br>";
		 print "local : <font color='red'>". $local."</font><br>";
		 print "tarifa : <font color='red'>". $tarifa."</font><br>";
		 print "tipo : <font color='red'>". $tipo."</font><br>";
		 
  }
   

}
fclose($ptArq);
}


function gravar($nomeArq,$linha) {
	print "aaaa  $nomeArq";
$linha=$linha . "\n";
	if(!file_exists($nomeArq)) {
		
		
		 $ptArq=fopen($nomeArq,"w");
		fputs($ptArq,$linha);
		fclose($ptArq);
    }else{
	   
	     $ptArq=fopen($nomeArq,"a");
	     fputs($ptArq,$linha);
	     fclose($ptArq);
     }
print("saindo");
}
function grava($cod,$prod,$quant,$preco,$local,$tarifa,$tipo){
$nomeArq="D:\Victor\prod.txt";
$linha=$cod."#";
$linha.=$prod ."#";
$linha.=$quant . "#";
$linha.=$preco . "#";
$linha.=$local . "#";
$linha.=$tarifa. "#" ;
$linha.=$tipo;
Gravar($nomeArq,$linha);
}
function recupera($proc){
  $nomeArq="D:\Victor\prod.txt";
  recuperar($nomeArq,$proc);
}
?>	   