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

                echo "Código do Pedido: " . $row ["codped_PK"] . " <br> Código de Cliente: " . $row["id_usuarios_FK"] . " <br> Código do Produto: " . $row["codprod_FK"] . " <br> Descrição: " . $row["descr"] . " <br> Valor do Pedido: " . $row["vlped"] . "<br><br>";

                // echo "<TABLE border = 1>" "<TR>""<TD>" Código de cliente: "</TD>""</TR>""</TABLE>" . $row["codcli_PK"] . "<TABLE border = 1><TR><TD>Nome do cliente: </TD></TR></TABLE>" . $row["nomecli"] . "<TABLE border = 1><TR><TD>CPF: </TD></TR></TABLE>" . $row["cpf"] . "<TABLE border = 1><TR><TD>Telefone: </TD></TR></TABLE>" . $row["tel"] . "<TABLE border = 1><TR><TD>Data de Nascimento: </TD></TR></TABLE>" . $row["dtnasc"] . "<TABLE border = 1><TR><TD> E-mail: </TD></TR></TABLE>" . $row["email"] . "<TABLE border = 1><TR><TD> Endereço: </TD></TR></TABLE>" . $row["ender"] . "<TABLE border = 1><TR><TD> Bairro: </TD></TR></TABLE>" . $row["bairro"] . "<TABLE border = 1><TR><TD> Cidade: </TD></TR></TABLE>" . $row["cidade"] . "<TABLE border = 1><TR><TD> CEP: </TD></TR></TABLE>" . $row["cep"] . "<TABLE border = 1><TR><TD> País: </TD></TR></TABLE>" . $row["pais"] . "<br><br></TR></TABLE>";
                // echo "<TABLE border = 1>" "<TR>""<TD>" "Código de cliente:" "</TD>" "<TD>" $row["codcli_PK"]"</TD>" "<TD>" "Nome do cliente:" "</TD>" "<TD>"$row["nomecli"]"</TD>" "<TD>" "CPF:" "</TD>" "<TD>"$row["cpf"]"</TD>" "<TD>" "Telefone:" "</TD>" "<TD>" $row["tel"] "</TD>" "<TD>" "Data de Nascimento:" "</TD>" "<TD>"$row["dtnasc"]"</TD>" "<TD>" "E-mail:" "</TD>" "<TD>"$row["email"]"</TD>" "<TD>" "Endereço:" "</TD>" "<TD>"$row["ender"]"</TD>" "<TD>" "Bairro:" "</TD>" "<TD>"$row["bairro"]"</TD>" "<TD>" "Cidade:" "</TD>" "<TD>"$row["cidade"]"</TD>" "<TD>" "CEP:" "</TD>" "<TD>"$row["cep"]"</TD>" "<TD>" "País:" "</TD>" "<TD>"$row["pais"]"</TD>""</TR>" "</TABLE>" "<br><br>";
            }
        } else {
            echo "0 resultados encontrados";
        }

        $conexao->close();
        ?>
    </body>
</html>

