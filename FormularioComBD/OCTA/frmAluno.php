<html>
<body>
<form name="frmEntrada" action="funcoes.php" method="get">
<table border="2" bordercolor="red">
<tr>
<td>Matricula</td>
<td>Aluno</td>
<td>Nome da Mãe</td>
<td>Nome do pai</td>
<td>CPF</td>
<td>Telefone</td>
<td>Renda</td>
</tr>
<td><input type="text" name="tMat" value=<?php if (isset($_SESSION['matr'])==true) echo $_SESSION['matr'];?>></td>
<td><input type="text" name="tNome" value=<?php if (isset($_SESSION['nome'])==true) echo $_SESSION['nome'];?> ></td>
<td><input type="text" name="tMae" value=<?php if (isset($_SESSION['nomemae'])==true) echo $_SESSION['nomemae'];?>></td>
<td><input type="text" name="tPai" value=<?php if (isset($_SESSION['nomePai'])==true) echo $_SESSION['nomePai'];?>></td>
<td><input type="text" name="tCpf" value=<?php if (isset($_SESSION['cpf'])==true) echo $_SESSION['cpf'];?>></td>
<td><input type="text" name="tTel" value=<?php if (isset($_SESSION['tel'])==true) echo $_SESSION['tel'];?>></td>
<td><input type="text" name="tRenda" value=<?php if (isset($_SESSION['renda'])==true) echo $_SESSION['renda'];?>></td>
</tr>
<tr>
<td><input type="submit" name="btn1" Value="Incluir"></td>
<td><input type="submit" name="btn1" Value="Alterar"></td>
<td><input type="submit" name="btn1" Value="Excluir"></td>
<td><input type="submit" name="btn1" Value="Consultar"></td>
<td><input type="reset" name="btn1" Value="Limpar"></td>

</tr>

</table>
</form>
</body>
</html>
