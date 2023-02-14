<?php
    session_start();
    include 'connection.php';
    $name = mysqli_real_escape_string($connection,trim($_POST['nome']));
    $user = mysqli_real_escape_string($connection,trim($_POST['usuario']));
    $email = mysqli_real_escape_string($connection,trim($_POST['email']));
    $contato = mysqli_real_escape_string($connection,trim($_POST['contato']));
    $cpf = mysqli_real_escape_string($connection,trim($_POST['cpf']));
    $perfil = $_POST['perfil'];
    $password = mysqli_real_escape_string($connection,trim(md5($_POST['senha'])));
    $sql = "select count(*) as total from usuarios where usuario = '$user'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row['total'] == 1){
        $_SESSION['usuario_existente'] = true;
        header('Location: inicio.php');
        exit();
    }
    $sql = "INSERT INTO usuarios (nome,usuario,email,contato,perfil,cpf,senha,data_cadastro) VALUES ('$name','$user','$email','$contato','$perfil','$cpf','$password',NOW())";
    if($connection->query($sql) === true){
        $_SESSION['status_cadastro'] = true;
    }
    $connection->close();
    header('Location: inicio.php');
    exit();
?>