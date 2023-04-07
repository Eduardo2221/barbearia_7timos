<?php
    include_once '../../../controller/conexao.php';
    
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codAge = $_POST ["codAge"];
          
    // PASSO 3 - SQL PARA BUSCAR EM TABELAS

    $sql = "SELECT codAge, nomeCli, telCli, emailCli, tpServ, hrAgenda FROM Agendas WHERE codAge = '$codAge' ";

    $result = $conexao->query($sql)
            or die("Erro ao pesquisar dados do Agendamento.") . mysqli_error();

    if ($result->num_rows > 0) {
        // num_rows - dados de saída de cada linha
        while ($row = $result->fetch_assoc()) {

            echo "Código do Agendamento: " . $row ["codAge"] . " <br> Nome do Cliente: " . $row["nomeCli"] . " <br> Telefone do Cliente: " . $row["telCli"] . " <br> Email do Cliente: " . $row["emailCli"] . " <br> Tipo de Serviço: " . $row["tpServ"] . "<br> Horario do Agendamento" . $row["hrAgenda"] . "<br><br>";

        }
    } else {
        echo "0 resultados encontrados";
    }

    $conexao->close();
?>