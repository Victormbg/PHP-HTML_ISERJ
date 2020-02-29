<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	td{white-space:  pre;}
	</style>
	<title>Cadastro Alunos</title>
</head>
<body>
	<h1>CADASTRO DE ALUNOS</h1>
<form name="frmEntrada" action="funcoes.php" method="get">
<table>
<tr>

<td>Matricula:
<input type="text" name="tMat" value=<?php if(isset($_SESSION['matr']) == true) echo $_SESSION['matr']; ?>>
</td>
</tr>

<tr>
<td>Aluno:
<input type="text" name="tNome" value=<?php if(isset($_SESSION['nome']) == true) echo $_SESSION['nome'];?> >
</td>
</tr>

<tr>
<td>Nome da Mae:
<input type="text" name="tMae" value=<?php if(isset($_SESSION['nomeMae']) == true) echo $_SESSION['nomeMae'];?> >
</td>
</tr>
<tr>
<td>Nome do Pai:
<input type="text" name="tPai" value=<?php if(isset($_SESSION['nomePai']) == true) echo $_SESSION['nomePai'];?> >
</td>
</tr>
<tr>
<td>CPF:
<input type="text" name="tCpf" value=<?php if(isset($_SESSION['cpf'] )== true) echo $_SESSION['cpf'];?>>	
</td>
</tr>
<tr>
<td>Telefone:
<input type="text" name="tTel" value=<?php if(isset($_SESSION['tel'] )== true) echo $_SESSION['tel'];?>>	
</td>	
</tr>
<tr>
<td>Renda:
<input type="text" name="tRenda" value=<?php if(isset($_SESSION['renda']) == true) echo $_SESSION['renda'];?> >	
</td>
</tr>
<td><input type="submit" name="btn1" Value="Incluir"></td>
<td><input type="submit" name="btn1" Value="Alterar"></td>
<td><input type="submit" name="btn1" Value="Excluir"></td>
<td><input type="submit" name="btn1" Value="Consultar"></td>
<td><input type="reset" name="btn1" Value="Limpar"></td>
</table>
</form>
</body>
</html>