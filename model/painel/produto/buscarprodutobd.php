<!DOCTYPE html>
<!--
BUSCA DE DADOS EM TABELAS
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>img{width: 100px;height: 100px;}</style>
    </head>
    <body>
        <?php
        include_once '../../../controller/conexao.php';
    
        // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
        $codprod_PK = $_POST ["codprod_PK"];
                  
        // PASSO 3 - SQL PARA BUSCAR EM TABELAS

        if ($codprod_PK == 0) {
            $sql = "SELECT codprod_PK, nomeprod, catprod, qtprod, precoun, imgprod, pesoprod FROM produto";
        } else {
            $sql = "SELECT codprod_PK, nomeprod, catprod, qtprod, precoun, imgprod, pesoprod FROM produto WHERE codprod_PK = '$codprod_PK' ";
        }

        $result = $conexao->query($sql)
                or die("Erro ao pesquisar dados do produto.") . mysqli_error();

        if ($result->num_rows > 0) {
            // num_rows - dados de saída de cada linha
            while ($row = $result->fetch_assoc()) {

                echo "<table border=1>
                <tr>
                    <th>Código do Produto</th>
                    <th>Nome do Produto</th>
                    <th>Categoria do Produto</th>
                    <th>Quatidade do Produto</th>
                    <th>Preço da Unidade</th>
                    <th>Imagem do Produto</th>
                    <th>Peso do Produto</th>
                </tr>
                <tr>
                    <th>" . $row ["codprod_PK"] . "</th>
                    <th>" . $row["nomeprod"] . "</th>
                    <th>" . $row["catprod"] . "</th>
                    <th>" . $row["qtprod"] . "</th>
                    <th>" . $row["precoun"] . "</th>
                    <th><img" . $row["imgprod"] . "></th>
                    <th>" . $row["pesoprod"] . "</th>
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

