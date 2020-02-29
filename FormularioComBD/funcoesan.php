<?php

$mat=$_GET['tMat'];
$nome=$_GET['tNome'];
$nomeMae=$_GET['tMae'];
$nomePai=$_GET['tPai'];
$cpf=$_GET['tCpf'];
$tel=$_GET['tTel'];
$renda=$_GET['tRenda'];
$bt=$_GET['btn1'];

function conecta(){
	$conexao = mysqli_connect('localhost', 'root', '', 'OctaEscola');
	print "conectada com sucesso!!!<br>";
	return $conexao;
}

function inserir($conexao,$query){
	if(mysqli_query($conexao, $query)) {
		print "inserido com sucessso!!!<br>";
	}
	else
		print "erroo ". mysqli_errno($conexao);
}
function recupera($conexao,$query){

		$resultado = mysqli_query($conexao, $query);
	
	   global $reg;
		$reg=mysqli_fetch_array($resultado);
	     session_start();
		 $_SESSION['nome']=$reg['nome'];
		 $_SESSION['matr']=$reg['matr'];
		 $_SESSION['nomePai']=$reg['nomePai'];
		 $_SESSION['nomeMae']=$reg['nomeMae'];
		 $_SESSION['tel']=$reg['tel'];
		 $_SESSION['cpf']=$reg['cpf'];
		 $_SESSION['renda']=$reg['renda'];
	
      
	}
function alterar($conexao,$query){
	if(mysqli_query($conexao, $query)) {
		print "Alterado com sucessso!!!<br>";
	}
	else
		print "erroo ". mysqli_errno($conexao);
}
function excluir($conexao,$query){
	if(mysqli_query($conexao, $query)) {
		print "Excluido com sucessso!!!<br>";
	}
	else
		print "erroo ". mysqli_errno($conexao);
}
$con=conecta();

if ($bt=="Incluir") {
	$query = "insert into aluno (matr,nome, nomeMae,nomePai,cpf,tel,renda) values ($mat,'{$nome}', '{$nomeMae}',";
	$query= $query . " '{$nomePai}','{$cpf}', '{$tel}',{$renda})";
	 inserir($con,$query);

}
else
  if ($bt=="Consultar") {
	  $query="select * from aluno where matr=".$mat;
      recupera($con,$query);
  }else
		if ($bt=="Alterar") {
		$query="update aluno set nome='{$nome}',nomeMae='{$nomeMae}',nomePai='{$nomePai}',cpf='{$cpf}',tel='{$tel}',";
		$query=$query . "renda={$renda} where matr=".$mat;
		alterar($con,$query);
		}  else
         	if ($bt=="Excluir") {
	        	$query="delete from aluno where matr=".$mat;   
	            excluir($con,$query);
  //     header("Location: frmAluno.php");
}

?>
<?php include("frmAluno.php");?>