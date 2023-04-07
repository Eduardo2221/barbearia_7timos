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

        // Métodos do objeto Cliente
        //$buscar = $_POST ["buscar"];

        // SQL PARA BUSCAR EM TABELAS
        $sql = "DELETE FROM pedido WHERE codped_PK = '$codped_PK';";

        if ($conexao->query($sql)=== TRUE){
            echo "Realizada a exclusão do PEDIDO com Sucesso!";
        } else {
            echo "Erro de exclusão:". $conexao->error;
        }
                        
        $conexao->close();
       ?>
    </body>
</html>

