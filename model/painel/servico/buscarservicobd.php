<?php
    include_once '../../../controller/conexao.php';
    
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codServ = $_POST ["codServ"];
          
    // PASSO 3 - SQL PARA BUSCAR EM TABELAS

    if ($codServ == 0) {
        $sql = "SELECT codServ, tipoServ, vlServ, dtServ, hrServ FROM Servicos";
    } else {
        $sql = "SELECT codServ, tipoServ, vlServ, dtServ, hrServ FROM Servicos WHERE codServ = '$codServ' ";
    }

    $result = $conexao->query($sql)
            or die("Erro ao pesquisar dados do Agendamento.") . mysqli_error();

    if ($result->num_rows > 0) {
        // num_rows - dados de saída de cada linha
        while ($row = $result->fetch_assoc()) {

            echo "Código do Serviço: " . $row ["codServ"] . " <br> Tipo de Serviço: " . $row["tipoServ"] . " <br> Valor do Serviço: " . $row["vlServ"] . " <br> Data do Serviço: " . $row["dtServ"] . " <br> Horario do Serviço: " . $row["hrServ"] . "<br><br>";

        }
    } else {
        echo "0 resultados encontrados";
    }

    $conexao->close();
?>