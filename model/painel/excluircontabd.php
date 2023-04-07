<?php
    include_once '../../controller/conexao.php';

    session_start();
    $_SESSION['usuarioId'];

    $valorId = $_SESSION['usuarioId'];
    // echo "Usuario: ". $_SESSION['usuarioId'];

    // SQL PARA BUSCAR EM TABELAS
    $sql = "DELETE FROM usuarios WHERE id = '$valorId';";

    if ($conexao->query($sql)=== TRUE){
        echo "Realizada a exclusão do USUARIO com Sucesso!";
        header('location: ../../view/usuario.html');
    } else {
        echo "Erro de exclusão:". $conexao->error;
        header('location: ../../view/painel/usuario/excluirconta.html');
    }
                        
    $conexao->close();
?>