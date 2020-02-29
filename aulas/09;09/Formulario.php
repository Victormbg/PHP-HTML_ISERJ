<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF8">
	<script src="limpar.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Cadastro Alunos</title>
	<script>
 
 function formataMoeda(z) {
	 v = z.value;
	 v = v.replace(/\D/g, "") //permite digitar apenas números 
	 v = v.replace(/[0-9]{12}/, "inválido") //limita pra máximo 999.999.999,99 
	 v = v.replace(/(\d{1})(\d{8})$/, "$1.$2") //coloca ponto antes dos últimos 8 digitos 
	 v = v.replace(/(\d{1})(\d{5})$/, "$1.$2") //coloca ponto antes dos últimos 5 digitos 
	 v = v.replace(/(\d{1})(\d{1,2})$/, "$1,$2") //coloca virgula antes dos últimos 2 digitos 
	 z.value = v;
 }
 
</script>
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
<td>Nome do Aluno:
<input type="text" id="2" name="tNome" value=<?php if(isset($_SESSION['nome']) == true) echo $_SESSION['nome'];?> >
</td>
</tr>

<tr>
<td>Nome da Mãe:
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
<input type="text" class="cpf" id="5" name="tCpf" value=<?php if(isset($_SESSION['cpf'] )== true) echo $_SESSION['cpf'];?>>	
</td>
</tr>
<tr>
<td>Telefone:
<input type="text" class="tel" id="6" name="tTel" value=<?php if(isset($_SESSION['tel'] )== true) echo $_SESSION['tel'];?>>	
</td>	
</tr>
<tr>
<td>Renda:
<input type="text" id="7" placeholder="0,00" onKeyUp="formataMoeda(this)" name="tRenda" value=<?php if(isset($_SESSION['renda']) == true) echo $_SESSION['renda'];?> >	
</td>
</tr>
</table>
<select class="box" name="Funcoes">
	<option value="NS">Não selecionado</option>
	<option value="1">Maior valor</option>
	<option value="2">Menor valor</option>
	<option value="3">Por vestigio</option>
	<option value="4">Varios nomes</option>
</select>
<table>
<td><input type="submit" name="btn1" Value="Incluir"></td>
<td><input type="submit" name="btn1" Value="Alterar"></td>
<td><input type="submit" name="btn1" Value="Excluir"></td>
<td><input type="submit" name="btn1" Value="Consultar"></td>
<td><input type="submit" name="btn1" Value="Executar Funções"></td>
<td><input type="reset" name="btn1" Value="Limpar" onclick="limpar()"></td>
<td><input type="button" name="btn1" Value="Limpar Formulario" onclick="limpar()"></td>
</table>



</form>
</body>
</html>