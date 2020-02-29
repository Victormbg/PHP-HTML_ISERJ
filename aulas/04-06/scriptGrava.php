<?php
function fechararq($ptArq){
	fclose($ptArq);
}
function soLer($nomeArq, $proc){
	$achou=false;
	$ptArq=fopen($nomeArq, "r");
	if (!$ptArq){
		printf ("Impossível abrir o arquvo!");
		exit;
	}else{
		
		while (!feof($ptArq) && $achou==false){
			$char = fgets($ptArq);
			$pos = strpos ($char, "/");
			
		$nome = substr($char, $pos+1);
        $pos = strpos($nome, "/");
        $nome = substr($nome,0,$pos);
        // print " nome " .$nome;
        if ($nome==$proc)
        $achou=true;			
		}
	}
fclose($ptArq);
return $char;
}

function maior($nomeArq){
	$maior=0;
	$MaiorNome=0;
	$sal=0;
	$ptArq=fopen($nomeArq, "r");
	if (!$ptArq){
		printf ("Impossível abrir o arquvo!");
		exit;
	}else{
		
		while (!feof($ptArq)){
			$char = fgets($ptArq);
			$lin=$char;
		    $pos=strpos($lin, "/");
            $cod=substr($lin,0,$pos);
            $lin2=substr($lin,$pos+1);	
	     	$pos=strpos($lin2,"/");
	    	$nome=substr($lin2,0,$pos);
		    $linha = substr($lin2,$pos+1); 
	    	$pos=strpos($linha, "/");
	    	$funcao=substr($linha,0,$pos);
	    	$sal=substr($linha,$pos+1);	
			print " nome " .$nome . "  ". $sal;
	if($sal>$maior){
			$MaiorNome=$nome;
			$maior=$sal;
	}	
		}
	}
fclose($ptArq);
print "O funcionário de maior salário é" . $MaiorNome;	
}	

function mediaSal($nomeArq){
	$cont=0;
	$total=0;
	$media=0;
	$ptArq=fopen($nomeArq, "r");
	if (!$ptArq){
		printf ("Impossível abrir o arquvo!");
		exit;
	}else{
		
		while (!feof($ptArq)){
			$char = fgets($ptArq);
			$lin=$char;
			$pos=strpos($lin, "/");
            $cod=substr($lin,0,$pos);
            $lin2=substr($lin,$pos+1);		
		    $pos=strpos($lin2,"/");
		    $nome=substr($lin2,0,$pos);
		    $linha = substr($lin2,$pos+1); 
		    $pos=strpos($linha, "/");
		    $funcao=substr($linha,0,$pos);
		    $sal=substr($linha,$pos+1);
			if (feof($ptArq)==false){
			$sal=(float)$sal;
			$total=$total + $sal;
			$cont=$cont+1;
			}
			
			
			
		}	
	}	
fclose($ptArq);
print("cont " . $cont);
$media=$total/$cont;
print "A média salarial é" .	$media;
}


function Grava($nomeArq, $linha){
$linha=$linha . "\n";
    if (!file_exists($nomeArq)){
		$ptArq=fopen($nomeArq, "w");
		fputs($ptArq, $linha);
		fclose($ptArq);
	}else{
		$ptArq=fopen($nomeArq, "a");
		fputs($ptArq, $linha);
		fclose($ptArq);
		
	} 
print("Saindo...");	
} 


$nomeArq="D:\Juliana\aluno.txt";
$nome=$_GET["tNome"];
$cod=$_GET["tCod"];
$funcao=$_GET["tFuncao"];
$sal=$_GET["tSal"];
$botao=$_GET["btn1"];

$linha=$cod . "/";
$linha.=$nome . "/";
$linha.=$funcao . "/";
$linha.=$sal;

if ($botao=="Gravar"){
	grava ($nomeArq, $linha);
}else{
	if ($botao=="Recuperar"){
    $proc=$nome;
    $lin=soLer($nomeArq, $proc);
    
        $pos=strpos($lin, "/");
        $cod=substr($lin,0,$pos);
        $lin2=substr($lin,$pos+1);	//pulo o codigo, fica nome em diante	
		$pos=strpos($lin2,"/");
		$nome=substr($lin2,0,$pos);
		$linha = substr($lin2,$pos+1); //pulo o nome e vou para a função
		$pos=strpos($linha, "/");
		$funcao=substr($linha,0,$pos);
		$sal=substr($linha,$pos+1);
	}
	if ($botao=="Maior"){
		maior($nomeArq);
		
	}else	
		if ($botao=="Media"){
			mediaSal($nomeArq);
		}
		
		
		
    }
?>
    <?php 
	if ($botao=="Recuperar")
		
	 
	include ("pExibe.php");
    ?>