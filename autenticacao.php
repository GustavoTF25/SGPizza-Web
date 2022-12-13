<?PHP
session_start();

include('ConfigLogin.php');

if(empty($_POST['emaillogin']) || empty($_POST['senhalogin'])) {
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
<script type=\"text/javascript\">
   alert(\"Os campos devem ser preenchidos.\");
</script>";
 exit();
}

$login = mysqli_real_escape_string($db, $_POST['emaillogin']);
$senha = mysqli_real_escape_string($db, $_POST['senhalogin']);

$query = "SELECT * FROM `fun_funcionarios` WHERE fun_email = '$login' AND fun_senha = '$senha'";

$result = mysqli_query($db, $query);

$resultado = mysqli_fetch_array($result);
$_SESSION['emaillogin'] = $resultado['emaillogin'];
$_SESSION['senhalogin'] = $resultado['senhalogin'];

$row = mysqli_num_rows($result);

$hashed = "SELECT fun_senha FROM 'fun_funcionarios' where fun_email = '$login' "; 

$senha2 = 'senhalogin';



if (password_verify($senha2, $hashed)) {
echo $hashed;
   header('Location:balcaopedidos.php');
} else {
   header('Location:index.php');
}

/*if($row == 1) {
   $_SESSION['emaillogin'] = $login;
   header('Location: balcaopedidos.php');
   exit();
} else {	
   $_SESSION['nao_autenticado'] = true;	
   echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
<script type=\"text/javascript\">
   alert(\"O usuário não encontrado.\");
</script>";
   //header('Location: index.php');
   exit();
}*/

     
?>




