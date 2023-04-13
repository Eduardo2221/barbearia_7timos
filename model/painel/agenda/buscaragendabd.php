<?php
    include_once '../../../controller/conexao.php';
    
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $codAge = $_POST ["codAge"];
          
    // PASSO 3 - SQL PARA BUSCAR EM TABELAS

    if ($codAge == 0) {
        $sql = "SELECT codAge, nomeCli, telCli, emailCli, tpServ, hrAgenda FROM Agendas";
    } else {
        $sql = "SELECT codAge, nomeCli, telCli, emailCli, tpServ, hrAgenda FROM Agendas WHERE codAge = '$codAge'";
    }

    $result = $conexao->query($sql)
            or die("Erro ao pesquisar dados do Agendamento.") . mysqli_error();

    if ($result->num_rows > 0) {
        // num_rows - dados de saída de cada linha
        while ($row = $result->fetch_assoc()) {

            echo "<table border=1>
                <tr>
                    <th>Código do Agendamento</th>
                    <th>Nome do Cliente</th>
                    <th>Telefone do Cliente</th>
                    <th>Email do Cliente</th>
                    <th>Tipo de Serviço</th>
                    <th>Horario do Agendamento</th>
                </tr>
                <tr>
                    <th>" . $row ["codAge"] . "</th>
                    <th>" . $row["nomeCli"] . "</th>
                    <th>" . $row["telCli"] . "</th>
                    <th>" . $row["emailCli"] . "</th>
                    <th>" . $row["tpServ"] . "</th>
                    <th>" . $row["hrAgenda"] . "</th>
                </tr>
                </table><br><br>";
        }
    } else {
        echo "0 resultados encontrados";
    }

    $conexao->close();
?>