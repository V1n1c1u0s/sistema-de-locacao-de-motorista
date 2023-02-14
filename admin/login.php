<?php
    session_start();
    include 'connection.php';
    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: index.php');
        exit();
    }
    $user = mysqli_real_escape_string($connection,$_POST['usuario']);
    $password = mysqli_real_escape_string($connection,$_POST['senha']);
    $query = "select nome from usuarios where usuario='{$user}' and senha=md5('{$password}')";
    $result = mysqli_query($connection,$query);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $usuario_bd = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $usuario_bd['nome'];
        header('Location: inicio.php');
        exit();
    }else{
        $_SESSION['invalid_session'] = true;
        header("Location: index.php");
        exit();
    }
?>