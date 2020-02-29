<html>
<head>
<title>Herança</title>
</head>
<body bgColor="#93db70">
<form name="frm1" action="scriptCalc.php" method="get">
<h2>Formulário</h2>
<hr>
<h3>Entrada de Dados:</h3>
<label>Codigo</label><br>
<input type="text" name="tCod"/><br>
<label>Descrição</label><br>
<input type="text" name="tDesc"/><br>
<label>Quantidade</label><br>
<input type="text" name="tQuant"/><br>
<label>Preço</label><br>
<input type="text" name="tpreco" /><br>
<hr>
<h3>Produto Estrangeiro:</h3>
<label>Pais</label>
<select name="Pais">
<option value="EUA">Estados Unidos
<option value="Italia">Italia
<option value="chile">Chile
</select>
<h3>Produto Nacional:</h3>
<label>Taxa</label>
<input type="text" name="tTaxa" />
<hr>
<label>Estado<br>
<select name="estados">
<option value="Sp">São Paulo
<option value="Mg">Minas gerais
<option value="Pr">Parana
</select>
<br>
<br><label>Aliquota</label><br>
<input type="text" name="tAli" />
<hr>
<input type="submit" name="btn1" value="Incluir" />
<input type="button" name="btn1" value="Limpar" />

</form>
</body>
</html>