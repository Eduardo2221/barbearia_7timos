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
        //$nomecli = $_POST ["nomecli"]; //atribuindo do campo "nome" vindo do formulario para variavel
        $cpf = $_POST ["cpf"];
        
          
        // PASSO 3 - SQL PARA BUSCAR EM TABELAS

        if ($cpf == 0) {
            $sql = "SELECT  id  , nome , cpf  , tel , dtnasc , email , niveis_acesso_id FROM usuarios";
        } else {
            $sql = "SELECT  id  , nome , cpf  , tel , dtnasc , email , niveis_acesso_id FROM usuarios WHERE cpf = '$cpf' ";
        }

        $result = $conexao->query($sql)
                or die("Erro ao pesquisar dados do cliente.") . mysqli_error();

        if ($result->num_rows > 0) {
            // num_rows - dados de saída de cada linha
            while ($row = $result->fetch_assoc()) {

                echo "Código de cliente: " . $row ["id"] . " <br> Nome do cliente: " . $row["nome"] . " <br> CPF: " . $row["cpf"] . " <br> Telefone: " . $row["tel"] . " <br> Data de Nascimento: " . $row["dtnasc"] . " <br> E-mail: " . $row["email"] . " <br> nivel acesso: " . $row["niveis_acesso_id"] . "<br><br>";

            }
        } else {
            echo "0 resultados encontrados";
        }

        $conexao->close();
        ?>
    </body>
</html>

