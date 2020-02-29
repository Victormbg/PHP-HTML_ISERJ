<html>
<head>
<title>Aplicação Escolar</title>
</head>
<body>
<form name = "frm1" method = "get" action = "scriptcall.php">
Nome:<br>
<input type = "text" name = "tNome" />
<br>
Nota 1:<br>
<input type = "number" name = "tNota1" />
<br>
Nota 2:<br>
<input type = "number" name = "tNota2" />
Curso: <br>
<input type = "radio" name = "rbcurso" checked = "checked" value = "Informática"/> Informática<br>
<input type = "radio" name = "rbcurso" value = "Administração"/> Administração<br>

<select name = "Disc">
<option name = "LP1"> LP1</option>
<option name = "Contabilidade"> Contabilidade</option>
<option name = "MD2"> MD2</option>
<option name = "Economia"> Economia</option>
</select><br>

<input type = "submit" name = "btn1" value = "Calcula"/>
<input type = "reset" name = "btn2" value = "Limpa"/>

</form>

</body>	
</html>