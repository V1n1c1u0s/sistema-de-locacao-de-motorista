<?php
    include 'verifica_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema De Locação</title>
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "css/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="container-logo">
            <h2><a href="logout.php">Logout</a></h2>
            <div class="logo">
                <img src="css/img/UFRPE.png" alt="UFRPE">
            </div>
        </div>
        <div class=container-cadastro>
            <form class="form" action="cadastrar.php" method="POST">
                <div class=mensagem>
                    <h1><?php echo 'Bem-vindx de volta, '.$_SESSION['name'].'!';?></h1>
                    <h2>Realize o cadastro de um novx usuárix</h2>
                </div>
                <div class="space">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="space test">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="usuario" placeholder="Nome De Usuário">
                </div>
                <div class="space test">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" name="email" placeholder="Email"/>
                </div>
                <div class="space test">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="contato" placeholder="Contato">
                </div>
                <div class="space test">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="cpf" placeholder="CPF">
                </div>
                <div class="space test">
                    <select name="perfil">
                        <option value="" selected disabled>Perfil</option>
                        <option value="1">Admin</option>
                        <option value="2" >Motorista</option>
                        <option value="3">Solicitante</option>
                    </select>
                </div> 
                <div class="space test">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
            <button class="btn test" type="submit">Cadastrar</button>
            <?php
                if(isset($_SESSION['usuario_existente'])):
            ?>
            <div class="alert">
                <p>Usuário escolhido já existe! Informe outro e tente novamente!</p>
            </div>
            <?php
                endif;
                unset($_SESSION['usuario_existente']);
            ?>
            <?php
                if(isset($_SESSION['status_cadastro'])):
            ?>
            <div class="alert">
                <p>Cadastro efetuado!</p>
            </div>
            <?php
                endif;
                unset($_SESSION['status_cadastro']);
            ?>
        </form>
        </div>
    </div>
</body>
</html>