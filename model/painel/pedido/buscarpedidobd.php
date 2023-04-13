<!DOCTYPE html>
<!--
BUSCA DE DADOS EM TABELAS
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../../../controller/conexao.php';
    
        // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
        $codped_PK = $_POST ["codped_PK"];
          
        // PASSO 3 - SQL PARA BUSCAR EM TABELAS

        if ($codped_PK == 0) {
            $sql = "SELECT codped_PK, id_usuarios_FK, codprod_FK, descr, vlped FROM pedido";
        } else {
            $sql = "SELECT codped_PK, id_usuarios_FK, codprod_FK, descr, vlped FROM pedido WHERE codped_PK = '$codped_PK' ";
        }

        $result = $conexao->query($sql)
                or die("Erro ao pesquisar dados do cliente.") . mysqli_error();

        if ($result->num_rows > 0) {
            // num_rows - dados de saída de cada linha
            while ($row = $result->fetch_assoc()) {

                echo "<table border=1>
                <tr>
                    <th>Código do Pedido</th>
                    <th>Código de Cliente</th>
                    <th>Código do Produto</th>
                    <th>Descrição</th>
                    <th>Valor do Pedido</th>
                </tr>
                <tr>
                    <th>" . $row ["codped_PK"] . "</th>
                    <th>" . $row["id_usuarios_FK"] . "</th>
                    <th>" . $row["codprod_FK"] . "</th>
                    <th>" . $row["descr"] . "</th>
                    <th>" . $row["vlped"] . "</th>
                </tr>
                </table><br><br>";
            }
        } else {
            echo "0 resultados encontrados";
        }

        $conexao->close();
        ?>
    </body>
</html>

