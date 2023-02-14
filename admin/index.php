<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "css/img/favicon.ico"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <div class="container">
        <div class="container-login">
            <form class="form" action="login.php" method="POST">
                <div class="mensagem">
                    <h1>Bem-vindo!</h1>
                    <h2>Faça seu login.</h2>
                </div>
                <div class="space">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input name="usuario" type="text" placeholder="Usuario" autofocus="">
                </div>
                <div class="space test">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input name="senha" type="password" placeholder="Senha">
                </div>
                <!--<div style="padding: 4px;">
                    <a style="color: white; margin: 210px;" href="cadastro.php">Cadastrar</a>
                </div>-->
                <button class="btn test" type="submit"><span>Entrar<span></button>
                <?php
                    if(isset($_SESSION['invalid_session'])):
                ?>
                <div class="space test">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['invalid_session']);
                ?>
            </form>
        </div>
        <div class="container-logo">
            <div class="logo">
                <img src="css/img/UFRPE.png" alt="UFRPE">
            </div>
        </div>
    </div>
</body>

</html>