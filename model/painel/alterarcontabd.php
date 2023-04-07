<?php
    include_once '../../controller/conexao.php';

    session_start();
    $_SESSION['usuarioId'];
    $valorId = $_SESSION['usuarioId'];
        
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $nome = $_POST ["nome"]; //atribuindo do campo "nome" vindo do formulario para variavel
    $cpf = $_POST ["cpf"];
    $tel = $_POST ["tel"];
    $dtnasc = $_POST ["dtnasc"];
    $email = $_POST ["email"];
    $senha = $_POST ["senha"];

    $niveis_acesso_id = 3;

    $senha = md5($senha);

    //SQL PARA ATUALIZAR TABELAS
    $sql = "UPDATE usuarios SET nome = '$nome', cpf ='$cpf' , tel = '$tel' , dtnasc = '$dtnasc' , email = '$email', senha = '$senha' , niveis_acesso_id = '$niveis_acesso_id' WHERE id = '$valorId';";

    if ($conexao->query($sql) === TRUE) {
        echo "Realizada a atualização do USUARIO com Sucesso!";
    } else {
        echo "Erro de atulização:" . $conexao->error;
    }

    $conexao->close();
?>