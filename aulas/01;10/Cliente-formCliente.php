<?php include("cabecalho.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="controle_cliente.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="text" name="email" /></td>
        </tr>
		<tr>
		<td>Login</td>
            <td><input class="form-control" type="text" name="login" /></td>
			</tr>
        <tr>
		<td>Senha</td>
            <td><input class="form-control" type="Password" name="senha" /></td>
			</tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
