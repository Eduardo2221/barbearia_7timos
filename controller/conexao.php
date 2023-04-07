<?php
    //CONEXÃO COM O BANCO DE DADOS
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "barbearia";
        
    // PASSO 1 - CONECTAR AO SERVIDOR DE BANCO DE DADOS
    $conexao = new mysqli($servername, $username, $password, $dbname);
        
    // PASSO 2 - VERIFICAR A CONEXÃO COM DB
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
?>

