<?php
    include_once '../../../controller/conexao.php';
        
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codServ = $_POST ["codServ"];
    $tipoServ = $_POST ["tipoServ"];
    $vlServ = $_POST ["vlServ"];
    $dtServ = $_POST ["dtServ"];
    $hrServ = $_POST ["hrServ"];

    // SQL PARA INSERIR DADOS NA TABELAS ESPEFÍFICA
    $sql = "INSERT INTO Servicos (codServ, tipoServ, vlServ, dtServ, hrServ)
    VALUE ('$codServ','$tipoServ','$vlServ','$dtServ','$hrServ');";

    if ($conexao->query($sql) === TRUE) {
        echo "Nova inserção de Serviço realizada Sucesso!";
    } else {
        echo "Erro:" . $sql . "<br>" . $conexao->error;
    }
    echo "<br>";
    $conexao->close();
?>