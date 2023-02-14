<?php
    define('HOST','localhost');
    define('USUARIO','root');
    define('SENHA','');
    define('DB','ufrpe');
    //criar arq ou funcao pro codigo abaixo - cria banco de dados e tabelas
    $conn = mysqli_connect(HOST, USUARIO) or die ('Ímpossivel de se conectar!');
    
    $query = file_get_contents("database.sql");

    //execute multi query 
    if(mysqli_multi_query($conn, $query))
        $conn->close();
    else 
        exit();
    
    $connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Ímpossivel de se conectar!');
?>