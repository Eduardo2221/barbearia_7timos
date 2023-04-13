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


            echo "<table border=1>
            <tr>
                <th>Código do Serviço</th>
                <th>Tipo de Serviço</th>
                <th>Valor do Serviço</th>
                <th>Data do Serviço</th>
                <th>Horario do Serviço</th>
            </tr>
            <tr>
                <th>" . $row ["codServ"] . "</th>
                <th>" . $row["tipoServ"] . "</th>
                <th>" . $row["vlServ"] . "</th>
                <th>" . $row["dtServ"] . "</th>
                <th>" . $row["hrServ"] . "</th>
            </tr>
            </table><br><br>";

        }
    } else {
        echo "0 resultados encontrados";
    }

    $conexao->close();
?>