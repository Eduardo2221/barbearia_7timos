<?php
    include_once '../../../controller/conexao.php';
        
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codAge = $_POST ["codAge"];
    $nomeCli = $_POST ["nomeCli"];
    $telCli = $_POST ["telCli"];
    $emailCli = $_POST ["emailCli"];
    $tpServ = $_POST ["tpServ"];
    $hrAgenda = $_POST ["hrAgenda"];

    //SQL PARA ATUALIZAR TABELAS
    $sql = "UPDATE Agendas SET codAge = '$codAge', nomeCli ='$nomeCli' , telCli = '$telCli' , emailCli = '$emailCli' , tpServ = '$tpServ' , hrAgenda = '$hrAgenda' WHERE codAge = '$codAge';";

    if ($conexao->query($sql) === TRUE) {
        echo "Realizada a atualização do AGENDAMENTO com Sucesso!";
    } else {
        echo "Erro de atulização:" . $conexao->error;
    }

    $conexao->close();
?>