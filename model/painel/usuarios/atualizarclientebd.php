<!DOCTYPE html>
<!--
ATUALIZAÇÃO DE DADOS EM TABELAS
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
        $nome = $_POST ["nome"]; //atribuindo do campo "nome" vindo do formulario para variavel
        $cpf = $_POST ["cpf"];
        $tel = $_POST ["tel"];
        $dtnasc = $_POST ["dtnasc"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $niveis_acesso_id = $_POST ["niveis_acesso_id"];

        $senha = md5($senha);

        //SQL PARA ATUALIZAR TABELAS
        $sql = "UPDATE usuarios SET nome = '$nome', cpf ='$cpf' , tel = '$tel' , dtnasc = '$dtnasc' , email = '$email', senha = '$senha' , niveis_acesso_id = '$niveis_acesso_id' WHERE cpf = '$cpf';";

        if ($conexao->query($sql) === TRUE) {
            echo "Realizada a atualização do CLIENTE com Sucesso!";
        } else {
            echo "Erro de atulização:" . $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
