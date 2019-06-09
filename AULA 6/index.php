<html lang="pt-br">
<head>
<style>
*{
	margin:0;
}
label{
	padding:10px;
	color:red;
}
form{
	background-color:lightblue;
	height:200px;
	width:500px;
}
input{
	margin-top:10px;
	padding:3px;
	width:45px;
	text-align:center;
}
select{
	margin-top:10px;
	padding:3px;
}
input[type=submit]{
	margin-left:15px;
	margin-top:10px;
	color:green;
	padding:3px;
	width:60px;
	background-color:gold;
}

input[type=reset]{
	margin-left:180px;
	margin-top:30px;
	color:green;
	padding:3px;
	width:60px;
	background-color:gold;
}
</style>
<title>CALCULADORA</title>
<meta charset="utf-8">
</head>
<body>
<form method="POST" action = "script.php">
<label>Operação 1:</label>
<input type="text" name="num1"/><br>
<label>Operação 2:</label>
<input type="text" name="num2"/><br>
<label>Escolha a operação:</label>
<input type="submit" name="op" value="+" />
<input type="submit" name="op" value="-" />
<input type="submit" name="op" value="*" />
<input type="submit" name="op" value="/" />
<br>
<label>O resultado é: </label><br>
<input type="reset" value = "Limpar"/><br>
</form>
</body>
</html>
