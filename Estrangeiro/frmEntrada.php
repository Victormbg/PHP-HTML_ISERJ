<html>
<head>
<title>Herança</title>
</head>
<body bgColor="#93db70">
<form name="frm1" action="scriptCalc.php" method="get">
<label>Codigo</label><br>
<input type="text" name="tCod"/><br>
<label>Descrição</label><br>
<input type="text" name="tDesc"/><br>
<label>Quantidade</label><br>
<input type="text" name="tQuant"/><br>
<label>Preço</label><br>
<input type="text" name="tPreco"/><br>
<hr>
<h3>Produto Estrangeiro</h3><br>
<label>Pais</label>
<select name="Pais">
<option value="NS">Não selecionado
<option value="EUA">Estados Unidos
<option value="Italia">Italia
<option value="chile">Chile
</select><br>
<br><label>Taxa</label>
<input type="text" name="tTaxa" />
<hr>
<h3>Produto Nacional</h3>
<label>Estado</label>
<select name="Estados">
<option value="NS">Não selecionado
<option value="São Paulo">São Paulo
<option value="Minas Gerais">Minas gerais
<option value="Parana">Parana
</select><br>
<br><label>Aliquota</label>
<input type="text" name="tAli" />
<hr>
<input type="submit" name="btn1" value="Incluir" />
<input type="button" name="btn1" value="Limpar" />
<select name="Funcoes">
<option value="NS">Não selecionado
<option value="Cad">Cadastrar
<option value="media">Media
<option value="Recup">Recuperação
<option value="maior">Maior
</select>
</form>
</body>
</html>