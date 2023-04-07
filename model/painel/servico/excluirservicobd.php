<?php
    include_once '../../../controller/conexao.php';

    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codServ = $_POST ["codServ"];

    // Métodos do objeto Cliente
    //$buscar = $_POST ["buscar"];

    // SQL PARA BUSCAR EM TABELAS
    $sql = "DELETE FROM Servicos WHERE codServ = '$codServ';";

    if ($conexao->query($sql)=== TRUE){
        echo "Realizada a exclusão do Serviço com Sucesso!";
    } else {
        echo "Erro de exclusão:". $conexao->error;
    }
                        
    $conexao->close();
?>