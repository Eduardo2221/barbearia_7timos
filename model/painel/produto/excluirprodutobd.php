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
        $codprod_PK = $_POST ["codprod_PK"];

        // SQL PARA BUSCAR EM TABELAS
        $sql = "DELETE FROM produto WHERE codprod_PK = '$codprod_PK';";

        if ($conexao->query($sql)=== TRUE){
            echo "Realizada a exclusão do PRODUTO com Sucesso!";
        } else {
            echo "Erro de exclusão:". $conexao->error;
        }
                        
        $conexao->close();
       ?>
    </body>
</html>

