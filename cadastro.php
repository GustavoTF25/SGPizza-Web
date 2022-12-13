<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="csscadastro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="fontawesome-free-5.15.4-desktop/svgs/solid/question.svg">
    <link rel="stylesheet" href="fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/solid.min.css">
    <title>Cadastro</title>
</head>
<header class="ps-5 bg-danger" style="font-family:cursive; font-size:50px; color:white">
    <picture>
        <img class="" src="img/pizza.png" alt="logotipo" title="Logotipo" height="75px" width="120px">
    </picture>
    <input type="button" onclick=" window.location='index.php' " class="btn btn-danger Redirect mb-2 ms-5" style="font-size:30px; " id="bthome" value="HOME"></input>
    <button class="btn btn-danger mb-2 ms-2" style="font-size:30px; ">SOBRE</button>
    <!-- <i class="fimT"  href="fontawesome-free-5.15.4-desktop/svgs/solid/question.svg"></i> -->
    <picture class="btn btn-danger  ">
        <img src="img/question.svg" height="45px" width="30px" title="Ajuda">
    </picture>
</header>


<body class="backPizza ">
    <!-- <a href="home.php" style="font-size:50px">voltar</a> -->
    <div class="backMeio container ">

        <div class=" row pt-5 pb-5 pe-5 ps-5">
            <div></div>
            <div class="borda  ">
                <div style="padding-bottom:15%">
                    <p class="pt-5 " style="font-size:30px"><strong>Info:</strong></p>

                    <form method="POST" action="cadastrar.php" style="font-size:30px">
                        <div>
                            <input type="text" name="fun_nome" id="nameuser" placeholder="Seu Nome">
                            <p></p>
                            <input id="" type="email" name="fun_email" placeholder="exemplo@email.com">
                            <p></p>
                            <input type="tel" name="fun_celular" id="idcelular" maxlength="12" placeholder="(00) 00000-0000">
                            <p></p>
                            <div style="font-weight:bold">
                                Funcionário(a):
                                <select name="fun_tipo" id="func">
                                    <option value="balcao">Balcão</option>
                                    <option value="gerente">Gerente</option>
                                    <option value="cozinha">Cozinha</option>
                                </select>
                            </div>
                            <p></p>
                            <input id="" type="password" maxlength="8" name="fun_senha" placeholder="Sua Senha">
                            <p></p>
                        </div>
                        <p></p>

                        <div id="idfontgrande">
                            <!-- <input style="font-size:30px" type="button" class="btn btn-primary Redirect" onclick="window.location='index.php'" class="me-5" value="Entrar"> -->
                            <strong> </strong><input style="font-size:30px" class="btn-success btn" type="submit" value="Cadastrar Funcionário"> </strong>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </div>
</body>

</html>