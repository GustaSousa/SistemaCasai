<?php

    $dbHost = 'Localhost';
    $dbUsername =  'root';
    $dbPassword = '';
    $dbName = 'casaidb';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
    
    // Definir a codificação da conexão para UTF-8
    mysqli_set_charset($conexao, "utf8");

    // if($conexao->connect_errno)
    // {  
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conectado";
    // }
?>