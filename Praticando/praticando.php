<html>

<head>

<title><h2>Praticando</h2></title>

<meta charset="utf-8"/>

</head>

<style>
input[type=reset]{
	color:green;
	padding:5px;
	width:60px;
	background-color:lightblue;
}

input[type=submit]{
	color:green;
	padding:5px;
	width:60px;
	background-color:lightblue;
}

body{
	background-color:lightblue;
}
p{
	color:green;
}

</style>

<body>

<body size="white"/>

<hr/>

<p>Área de entrada de dados</p>
<hr name="hr1"/>

<form name="frm1" method="GET" action="script.php"/>

<br/>

<p>Empresa</p>
<input type="text" name="tEMP" size="100"/><br/>

<p>CNPJ</p>
<input type="text" name="tCNPJ" size="50"/><br/>

<p>Faturamento</p>
<input type="text" name="tFat" size="100"/><br/>

<hr/>

<p>Funções</p>

<hr/>

<input type="submit" name="btn1" value="Calcular"/>

<input type="reset" name="btn1" value="Limpar"/>

<hr/>

</form>

</body>

</html>