<html>

<meta charset="UTF-8"/>

<head>

<title>Aplicação Escolar</title>

</head>

<body>

<form name="form1" method="POST" action="script.php">

Nome <br/>

<input type="text" name="tNome"/>

<br/>

Nota 1 <br/>

<input type="number" name="tNota1"/>

<br/>

Nota 2 <br/>

<input type="number" name="tNota2"/>

<br/>

Curso <br/>

<input type="radio" name="rbcurso" checked="checked" value="inf"/> Informática <br/>

<input type="radio" name="rbcurso" value="adm"/> Administração <br/>

<select name="Disc"/>
<option name="LP1"> LP1 </option>
<option name="Contabilidade"> Contabilidade </option>
<option name="MD2"> MD2 </option>
<option name="Economia"> Economia </option>
</select>

<br/>

<input type="submit" name="bt1" value="Calcular"/>

<input type="reset" name="bt2" value="Limpar"/>

</form>

</body>

</html>