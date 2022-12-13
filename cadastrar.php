<?php

use PhpMyAdmin\Controllers\Server\Status\Processes\RefreshController;

include_once("conexaoDados.php");
$x = 0;
$nome_funcionario = $_POST['fun_nome'];
$email_funcionario = $_POST['fun_email'];
$celular_funcionario = $_POST['fun_celular'];
$senha_funcionario = $_POST['fun_senha'];
$funcao_funcionario = $_POST['fun_tipo'];
//echo "$nome_usuario - $email_usuario";
$hashed = hash('sha512', $senha_funcionario, false, $array = [8]);

$resultado_funcionario = "INSERT INTO fun_funcionarios (fun_codigo, fun_nome, fun_email, fun_celular, fun_tipo, fun_senha) 
    VALUES ('$x','$nome_funcionario','$email_funcionario','$celular_funcionario', '$funcao_funcionario', '$hashed')";
$resultado_funcionario = mysqli_query($conn, $resultado_funcionario);

if (empty($_POST['fun_email']) || empty($_POST['fun_senha'] || empty($_POST['fun_celular']))) {
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro.php'>
		<script type=\"text/javascript\">
			alert(\"Os campos não podem estar vazios\");
		</script>
	";
} else {

	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro.php'>
		<script type=\"text/javascript\">
			alert(\"Cadastrado com Sucesso!!\");
		</script>";
}








?>