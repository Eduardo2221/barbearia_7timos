<?php
    include_once '../../../controller/conexao.php';
        
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codServ = $_POST ["codServ"];
    $tipoServ = $_POST ["tipoServ"];
    $vlServ = $_POST ["vlServ"];
    $dtServ = $_POST ["dtServ"];
    $hrServ = $_POST ["hrServ"];

    //SQL PARA ATUALIZAR TABELAS
    $sql = "UPDATE Servicos SET codServ = '$codServ', tipoServ ='$tipoServ' , vlServ = '$vlServ' , dtServ = '$dtServ' , hrServ = '$hrServ' WHERE codServ = '$codServ';";

    if ($conexao->query($sql) === TRUE) {
        echo "Realizada a atualização do Serviço com Sucesso!";
    } else {
        echo "Erro de atulização:" . $conexao->error;
    }

    $conexao->close();
?>