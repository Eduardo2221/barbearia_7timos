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

                echo "<table border=1><tr><th>Código de cliente</th><th>Nome </th><th>Cpf </th><th>Telefone </th><th>Data de Nascimento</th><th>E-mail</th><th>Nivel de Acesso</th></tr><tr><th>".$row ["id"]."</th><th>".$row["nome"]."</th><th>".$row["cpf"]."</th><th>".$row["tel"]."</th><th>".$row["dtnasc"]."</th><th>".$row["email"]."</th><th>".$row["niveis_acesso_id"]."</th></tr></table><br><br>";
            }
        } else {
            echo "0 resultados encontrados";
        }

        $conexao->close();
        ?>
    </body>
</html>

