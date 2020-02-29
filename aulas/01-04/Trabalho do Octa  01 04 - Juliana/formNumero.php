<html>
<head>
<title>Entrada de um Número</title>

</head>
 <!--Exercicio:
Criar um formulario de entrada de um número. Calcular e exibir:
a)O anterior;
b)O posterior;
c)O quadrado
d)A raiz quadrada;
e)Se é par ou impar
Tudo com função, inclusive para exibir.-->

<body bgcolor="black">
<form name="frm" method="GET" action="scriptNumero.php" />
<font size="7" color="yellow">Formulário de Calculo</font>
<br>
<hr>
<font color = "yellow" >Informe um número, consagrado:</font>
<br>
<input type="number" name="nA" />
<br>
<hr>
<font size ="2" color="yellow" >Está coisinha maravilhosa e pomposa irá calcular e exibir o número em sí, o anterior do digitado, o posterior,
<br> o seu quadrado, a raiz quadrada e irá verificar se o mesmo é par ou ímpar. </font>
<br>
<font color ="yellow">Boa sorte ao clicar no botão de calcular abaixo (?) <strike> Cuidado com os jumpscares</strike> </font>
<br>
<input type="submit" name="calcular" value="Calcular resultado" />
<input type="reset" name="resetar" value="Limpar" />
</body>
</html>