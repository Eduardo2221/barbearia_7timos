<?php
    include_once '../../../controller/conexao.php';
        
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    // $codped_PK = $_POST ["codped_PK"];
    $codAge = $_POST ["codAge"];
    $nomeCli = $_POST ["nomeCli"];
    $telCli = $_POST ["telCli"];
    $emailCli = $_POST ["emailCli"];
    $tpServ = $_POST ["tpServ"];
    $hrAgenda = $_POST ["hrAgenda"];

    // SQL PARA INSERIR DADOS NA TABELAS ESPEFÍFICA
    $sql = "INSERT INTO Agendas (codAge, nomeCli, telCli, emailCli, tpServ, hrAgenda)
    VALUE ('$codAge','$nomeCli','$telCli','$emailCli','$tpServ','$hrAgenda');";

    if ($conexao->query($sql) === TRUE) {
        echo "Nova inserção de Agendamento realizada Sucesso!";
    } else {
        echo "Erro:" . $sql . "<br>" . $conexao->error;
    }
    echo "<br>";
    $conexao->close();
?>