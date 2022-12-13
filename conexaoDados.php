 
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sgpizza";

//Criar a conexao
$conn = new mysqli($servidor, $usuario, $senha, $dbname);

if (!$conn) {
	die("Falha na conexao: " . $conn->connect_error);
} else {
	//echo "Conexao realizada com sucesso";
}

?>
 