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
        $codped_PK = $_POST ["codped_PK"];
        // $id_usuarios_FK = $_POST ["id_usuarios_FK"];
        $codprod_FK = $_POST ["codprod_FK"];
        $descr = $_POST ["descr"];
        $vlped = $_POST ["vlped"];

        //SQL PARA ATUALIZAR TABELAS
        $sql = "UPDATE pedido SET codped_PK = '$codped_PK', codprod_FK = '$codprod_FK' , descr = '$descr' , vlped = '$vlped' WHERE codped_PK = '$codped_PK';";

        if ($conexao->query($sql) === TRUE) {
            echo "Realizada a atualização do PEDIDO com Sucesso!";
        } else {
            echo "Erro de atulização:" . $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
