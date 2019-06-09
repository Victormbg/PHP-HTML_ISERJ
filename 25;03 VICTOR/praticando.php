<html>

<head>

<title>Calcular Impostos</title>

<meta charset="utf-8"/>

</head>

<style>
input[type=reset]{
	color:red;
	margin-left:30px;
	padding:5px;
	font-size:16px;
	width:70px;
	background-color:gold;
}

input[type=submit]{
	margin-left:30px;
	color:red;
	font-size:16px;
	padding:5px;
	width:72px;
	background-color:gold;
}
input[type=text]{
	padding:5px;
	width:250px;
}

body{
	background-color:lightyellow;
}
label{
	padding:20px;
	font-size:20px;
}

</style>
<body>
<body size="white"/>
<hr/>

<label>Entrada de dados:</label>
<hr name="hr1"/>

<form name="frm1" method="GET" action="script.php"/>

<br/>

<label>Razão Social:</label>
<input type="text" name="RS" size="100"/><br/>

<label>CNPJ:</label>
<input type="text" name="tCNPJ" size="50"/><br/>

<label>Faturamento:</label>
<input type="text" name="tFAT" size="100"/><br/>

<hr/>

<input type="submit" name="btn1" value="Calcular"/>

<input type="reset" name="btn1" value="Limpar"/>

<hr/>
</form>
</body>
</html>