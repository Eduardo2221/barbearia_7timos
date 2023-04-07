<?php
    include_once '../../../controller/conexao.php';

    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codAge = $_POST ["codAge"];

    // Métodos do objeto Cliente
    //$buscar = $_POST ["buscar"];

    // SQL PARA BUSCAR EM TABELAS
    $sql = "DELETE FROM Agendas WHERE codAge = '$codAge';";

    if ($conexao->query($sql)=== TRUE){
        echo "Realizada a exclusão do Agendamento com Sucesso!";
    } else {
        echo "Erro de exclusão:". $conexao->error;
    }
                        
    $conexao->close();
?>