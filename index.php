<?php


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="csshome.css">
  <title>Login - SGPizza</title>

</head>
<!-- tentativa de Nav 1, porem ocorreu um defeito ineseperado e esse defeito era que a nav tava feia
 <nav class="" style="background-color:red; height:fit-content; width:100%; padding-left:25%">
    <h1 id="titulo" class="" style="font-size:50px;color:white"><div class="pt-1"> SGPizza </div></h1>
    <ul class="pt-3">
        <li style="border: 10px inset gray;background-color:gray;" ><a href="login.php" style="padding-right:15px">Homepage</a></li>
        <li style="border: 10px inset gray;background-color:gray;"><a href="#" style="padding-right:15px">Sobre</a></li>
        <li style="border: 10px inset gray;background-color:gray;"><a href="index.php" style="padding-right:15px">Contato</a></li>
    </ul>
    </nav>
-->
<nav class="navbar navbar-expand-lg navbar-light bg-danger" style="padding-left:10%">
  <picture>
    <img src="img/pizza.png" alt="logotipo" title="Logotipo" height="75px" width="120px">
  </picture>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn btn-danger" style="font-size:30px;font-weight:bold;color:white" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-danger" style="font-size:30px;font-weight:bold;color:white" href="#">Sobre</a>
      </li>
    </ul>

  </div>
</nav>

<body class="backPizza">



  <div class="container bg-white  pt-5 " style="padding-bottom:250px">


    <div class="me-5 ms-5 mt-5 text-center row">
      <div class="col-3"></div>
      <div class="container border border-dark col-6 pt-5 pb-5">

        <div style="font-size: 30px;font-weight:bold;padding-top:20px;padding-bottom:20px">Login:</div>

        <!-- form login -->
        <form method="POST" action="autenticacao.php">


          <div style="font-size:30px;font-weight:bold;padding-bottom:20px">
            Email:
            <input type="email" style="font-size:22px;" name="emaillogin" id="endercoEmail" placeholder="exemplo@email.com">
          </div>
          <div style="font-size:30px;font-weight:bold;padding-right:9px;padding-bottom:20px">
            Senha:
            <input type="password" style="font-size:22px" name="senhalogin" id="idSenha" placeholder="*******">
          </div>
          <!-- 
                    <div style="font-size:30px;font-weight:bold;padding-right:24px;padding-top:10px;padding-bottom:20px">
                      Funcionário(a):
                      <select name="Funcionario" id="func">
                          <option value="Balcao">Balcão</option>
                          <option value="Gerente">Gerente</option>
                          <option value="Cozinha">Cozinha</option>
                      </select>
                      </div>  
                -->
          <div>
            <a class="col"><button class="btn btn-primary mb-1" style="font-size:30px;font-weight:bold" type="button">Esqueceu a senha?</button></a>
            <input type="submit" class="btn btn-success col" style="font-size: 30px;margin-bottom:20px;margin-top:12px;margin-left:90px;font-weight:bold" value="entrar">
          </div>

        </form>
      </div>

      <div class="col-3"></div>
    </div>
  </div>

</body>

</html>