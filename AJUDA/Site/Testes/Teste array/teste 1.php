<?php
$carros = array("Gol<br>","Uno<br>","Camaro<br>",12,20.6,true);
var_dump($carros);//mostra tudo da variável, se é istring e tal
if(is_array($carros)):// verificando se é um array, mas pode ser um int..fload......
echo "é um array";
else:
echo "não é um array";
endif;
echo"<hr>";
echo "<br><br><br><br><br>";
//object///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Cliente{
	public $Mome;
	public function atribuirNome($Mome){
		$this ->$Mome = $Mome;
	}
}
$cliente= new Cliente();
$cliente ->atribuirNome("Rafael");
var_dump($cliente);

//Teste//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo"<br><br><br><br>";
echo "<hr>";
$Estudo="PHP";
if(is_string($Estudo)):
echo "Ah, moleque!";
else:
echo"Poxa";
endif;


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

$nome="Feijoada";
echo $nome;
echo "<br>";
echo "Meu nome é $nome";
echo "<br>";
echo 'Meu nome é $nome';

echo "<br><br><br><br><br><br>";
echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$nome= "Rodrigo Oliveira";//escopo global
function exibeNome(){//escopo local
	global $nome;//definir $nome como global
	echo $nome;
}
exibeNome();

echo"<hr>";
function exibeCidade(){
	global $cidade;
	$cidade="Rio de Janeiro";
}
exibeCidade();
echo $cidade;

echo"<br>";
echo"<hr>";

$a=1;
$b=2;
$c=3;

function soma(){
echo	$GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
}
soma(); 	
echo"<br>";
echo"<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//constantes
define("Nome","José Carlos");
define("Idade",24);
define("Altura", 1.89);
define("Casado", true);
echo Nome;
var_dump(Casado);
echo"<br>";
echo"<hr>";

//define("TIMES" , ['vasco' , 'flamengo' , 'santos'] );    //Não funciona por algum caccete
//echo TIMES[3];	

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//ARRAYS
$carro1="BMW";
$carro2="Ferrari";
$carro3="Lamborguini";
//Imagine que tu tem 200 carros, vai ter que criar 200 variáveis ?
$carros= array("BMW", "Veloster","Ferrari");
//echo $carros;// vai dar erro
print_r($carros);
echo"<br>";
//iremos especificar os indice, normalmente começa com 0
echo $carros[0];
echo"<br>";
echo $carros[1];
echo"<br>";
echo $carros[2];
echo"<br>";

//criando os indeces
$Carros= array(1=>"BMW",2=> "Veloster",5=>"Ferrari");//Já definindo seus indices
$Carros[]="Amarok"; //Inserindo um elemento no array
print_r($Carros);

echo"<br><br>";

$motos=array();
$motos[]="Yamaha";
$motos[]="Honda";
print_r ($motos);
echo"<br><br>";
echo count($motos); // serve para contar a quantidade de valores dentro, tipo motos, que tem yamaha e honda
echo"<br><br>";
echo count($Carros);
echo"<br><br>";

foreach($Carros as $valor){     //Pegou do carros e atribuiu ao valor
	echo $valor;echo"<br>";
}
echo"<br>";
echo"<hr>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pessoa=array("nome"=> "Rodrigo", "idade"=>23, "altura"=>1.75);
$pessoa["cidade"]="Niteroi"; //Atribuindo um elemento de forma externa
echo $pessoa["nome"];
echo"<br>";
echo $pessoa["altura"];
echo"<br>";
print_r($pessoa);
echo"<br>";
foreach($pessoa as $indice =>$valor){
	echo $indice.":".$valor."<br>";
}
echo"<br>";
echo"<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Criando array dentro de arrey.
$times=array("cariocas"=> array("vasco","flamengo","botafogo"),"paulistas"=> array("santos","sao paulo","palmeiras"),"baianos"=>array("bahia","vitoria","itabuna"));
echo $times["cariocas"][0];
echo"<br>";
echo $times["paulistas"][0];
echo"<br>";
foreach($times["cariocas"]as $indice=>$valor){
	echo "$indice : $valor <br>";
}
echo"<br>";
echo"<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nomes=array("Rodrigo","Felipe","Jose","Anderson");
echo is_array($nomes);   //Se ele responder 1, é true
echo is_int($nomes);  //false é igual a nulo, por isso mostra nada
echo"<br>";
echo"<hr>";

$Jogos=array("Black", "CS 1.6","God of War");
if(is_array($Jogos)):
	echo "É um array";
else:
echo "Não é um array";
endif;
echo"<br>";
echo"<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nomes= array("Rodrigo Faro","Sua mãe", "Minha prima");
echo in_array("Sua mãe", $nomes);// ele verifica se tal coisa existe no $nomes
echo"<br>";
echo in_array("Ruan", $nomes);
echo"<br>";
echo in_array("Rodrigo Faro", $nomes);
echo"<br>";
echo"<hr>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nomes= array("Apresentator"=>"Rodrigo Faro","Safada"=>"Vossa mãe","Delicia"=> "Minha prima");
$keys=array_keys($nomes);
print_r($keys);
echo"<br>";
echo"<hr>";

$nomes= array("Apresentator"=>"Rodrigo Faro","Safada"=>"Vossa mãe","Delicia"=> "Minha prima");
$values=array_values($nomes);//atribuiu os valores como numéricos e os mostrou
print_r($values);
echo"<br>";
echo"<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$carros=array("Camaro","Uno","Gol");
$motos=array("Pop100","50cc","cb1000");
$veiculos=array_merge($carros,$motos);
print_r($veiculos);
echo"<br>";
print_r($carros);
echo"<br>";
echo array_pop($carros);//Mostra o que vai excluir
array_pop($carros);  //Exclui a última posição do array, nesse caso o gol é excluído.
echo"<br>";
print_r($carros);

echo"<br>";
echo"<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Definição simples e rápida
$lista = array('Pão', 'Ovos', 'Carne', 'Macarrão');
// Definição mais longa, porém mais fácil de entender
$lista = array();
$lista[10] = 'Pão';
$lista[1] = 'Ovos';
$lista[2] = 'Carne';
$lista[5] = 'Macarrão';
print_r($lista);

echo "<br>";

// Outro exemplo
$lista = array();
$lista[] = 'Pão';
$lista[] = 'Ovos';
$lista[] = 'Carne';
$lista[] = 'Macarrão';
print_r($lista);
echo"<br>";
echo"<hr>";

$carro = array();
$carro['cor'] = 'Vermelho';
$carro['modelo'] = 'CrossFox';
$carro['fabricante'] = 'Volkswagen';
echo "A cor do carro é: " . $carro['cor'];
// Resultado: A cor do meu carro é: Vermelho
echo"<br>";

// Lista
$lista = array('Pão', 'Ovos', 'Carne', 'Macarrão');
echo "O segundo item da lista é: " . $lista[1];
// Resultado: O segundo item da lista é: Ovos

echo"<br>";
echo"<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$doc = array("rg" => "00.000.00-X","cpf" => "000.000.000-00","cartao de credito" => 12345);
// echo $doc; // da erro
echo $doc['rg'];
echo"<br>";
var_dump($doc);
echo"<br>";
print_r($doc);
echo"<br>";
$values=array_values($doc);
print_r($values);
echo"<br>";
echo count($doc);
echo"<br>";
$keys=array_keys($doc);
print_r($keys);
echo"<br>";
echo in_array("cpf", $doc);
echo array_pop($doc);
array_pop($doc);
echo"<br>";
print_r($doc);
echo"<br>";
echo in_array("rg", $doc);// esse da erro, pois rg é um indice
echo"<br>";
echo"<hr>";

$doc = array("rg" => "00.000.00-X","cpf" => "000.000.000-00","cartao de credito" => 12345);
echo in_array("12345", $doc);// nesse caso da certo

echo"<br><br><br><br>";


?>