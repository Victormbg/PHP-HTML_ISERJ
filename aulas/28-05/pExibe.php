<html>
<head>
<title>Desenvolvimento</title>
</head>
<body bgcolor="black">
<form name="form1" action="frmGravaEstruturado.php" method="get">
<font color="yellow">Código do Funcionario</font><br>
<input type="text" name="tCod" value="<?php print $cod; ?>"/><br>
<font color="yellow">Funcionário</font><br>
<input type="text" name="tNome" value="<?php print $nome; ?>"/><br>
<br>
<font color="yellow">Função</font>
<br>
<input type="text" name="tFuncao" value="<?php print $funcao; ?>"/><br>
<font color="yellow">Salário</font>
<br>
<input type="text" name="tSal" value="<?php print $sal; ?>"/><br>
<input type="submit" name="btn1" a href="#" url="frmGravaEstruturado.php"/><br>
</form>
</body>
</html>