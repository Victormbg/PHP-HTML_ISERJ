<?php
function soLer($nomeArq){
$ptArq= fopen($nomeArq,"r");
if(!$ptArq){
  printf("impossivel abrir o arquivo");
  exit;
}else{
   while(!feof($ptArq)) {
	   $char =fgets($ptArq);
	   $pos=strpos($char,"#");	 
	   $cod=substr($char,0,$pos);
	   $linha=substr($char,$pos+1);
	//print "linha   ".$linha."<br>";
	  $pos=strpos($linha,"#");
	  $nome=substr($linha,0,$pos);
	  $linha=substr($linha,$pos+1);
	  $pos=strpos($linha,"#");
	  $quant=substr($linha,0,$pos);
	  print "quant $quant linha ".$linha;
  if (feof($ptArq)==false) {
      	 print("<br>Nome : <font color='red'> ". $nome."<br></font>");
	     print "Disciplina :<font color='red'> ". $disc."</font><br>";
         print "Media  : <font color='red'>". $media."</font><br>";
  }
   
}
}
fclose($ptArq);
}


function Grava($nomeArq,$linha) {
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
$nomeArq="D:\aaa\Prod.txt";
$linha.=$cod ."#";
$linha.=$prod ."#";
$linha.=$quant . "#";
$linha.=$preco . "#";
$linha.=$local . "#";
$linha.=$tipo . "#";
$linha.=$tarifa. "#" ;
$linha.=$tipo;
Grava($nomeArq,$linha);
function pesqu($proc){
  soler($nomeArq);
}
?>	   