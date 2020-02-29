<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=Formulario.php">  
	<script src="limpar.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Cadastro Alunos</title>
</head>
<body>
	<h1>CADASTRO DE ALUNOS</h1>
<form name="frmEntrada" id="frmEntrada" action="Funcoes.php" method="get">
<table>
<tr>

<td>Matricula:
<input type="text" id="1" name="tMat" value=<?php if(isset($_SESSION['matr']) == true) echo $_SESSION['matr']; ?>>
</td>
</tr>

<tr>
<td>Aluno:
<input type="text" id="2" name="tNome" value=<?php if(isset($_SESSION['nome']) == true) echo $_SESSION['nome'];?> >
</td>
</tr>

<tr>
<td>Nome da Mae:
<input type="text" id="3" name="tMae" value=<?php if(isset($_SESSION['nomeMae']) == true) echo $_SESSION['nomeMae'];?> >
</td>
</tr>
<tr>
<td>Nome do Pai:
<input type="text" id="4" name="tPai" value=<?php if(isset($_SESSION['nomePai']) == true) echo $_SESSION['nomePai'];?> >
</td>
</tr>
<tr>
<td>CPF:
<input type="text" id="5" name="tCpf" value=<?php if(isset($_SESSION['cpf'] )== true) echo $_SESSION['cpf'];?>>	
</td>
</tr>
<tr>
<td>Telefone:
<input type="text" id="6" name="tTel" value=<?php if(isset($_SESSION['tel'] )== true) echo $_SESSION['tel'];?>>	
</td>	
</tr>
<tr>
<td>Renda:
<input type="text" id="7" name="tRenda" value=<?php if(isset($_SESSION['renda']) == true) echo $_SESSION['renda'];?> >	
</td>
</tr>
</table>
<table>
<td><input type="submit" name="btn1" Value="Incluir"></td>
<td><input type="submit" name="btn1" Value="Alterar"></td>
<td><input type="submit" name="btn1" Value="Excluir"></td>
<td><input type="submit" name="btn1" Value="Consultar"></td>
<td><input type="reset" name="btn1" Value="Limpar" onclick="limpar()"></td>
<td><input type="button" name="btn1" Value="Limpar Formulario" onclick="limpar()"></td>
</table>
</form>
</body>
</html>