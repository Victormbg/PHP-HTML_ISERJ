<html>
<head>
<title>Herança</title>
</head>
<body bgColor="#93db70">
<form name="frm1" action="scriptCalc.php" method="get">
<label>Codigo</label>
<br>
<input type="text" name="tCod" />
<br>
<label>Descrição</label>
<br>
<input type="text" name="tDesc" />
<br>
<label>Quantidade</label>
<br>
<input type="text" name="tQuant" />
<br>
<label>Preço</label>
<br>
<input type="text" name="tpreco" />
<hr>
<h3>Produto Nacional</h3>
<label>Pais</label>
<select name="Pais">
<option value="EUA">Estados Unidos
<option value="Italia">Italia
<option value="chile">Chile
</select>
<label>Taxa</label>
<input type="text" name="tTaxa" />
<hr>
<label>Estado<br>
<select name="estados">
<option value="Sp">São Paulo
<option value="Mg">Minas gerais
<option value="Pr">Parana
</select>
<label>Aliquota</label>
<input type="text" name="tAli" />
<hr>
<input type="submit" name="btn1" value="Incluir" />
<input type="button" name="btn1" value="Limpar" />

</form>
</body>
</html>