
<?php
if ($_GET['tNome']=="" || $_GET['tIdade']=="") {
	print ("Erro na entrada de dados !");
    exit;
}
$nome = $_GET['tNome'];
$idade = $_GET['tIdade'];
if ($idade > 18)
	print $nome . " é maior de idade !";
else
	print $nome . " é menor de idade !";

/* Na cláusula method do comando de criação do form que são GET ou POST. São formas de se passar os parâmetros para o script chamado. 
Parametro é todo conteúdo da página GET tem duas limitações:
1- Os parametros aparecem na URL.
2- Seu tamanho é limitado em relação ao post. */

/* Para receber, usamos:
$_GET['nome da caixa  ]
      'nome do objeto'
Assim: $nome=$_GET['tnome'];
Tô pegando o valor que tá vindo da caixa de texto do form para o script que vai utilizada para fazer algo. */
?>