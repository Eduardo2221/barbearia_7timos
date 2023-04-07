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
        $codprod_PK = $_POST ["codprod_PK"];
        $nomeprod = $_POST ["nomeprod"];
        $catprod = $_POST ["catprod"];
        $qtprod = $_POST ["qtprod"];
        $precoun = $_POST ["precoun"];
        $imgprod = $_POST ["imgprod"];
        $pesoprod = $_POST ["pesoprod"];


        //SQL PARA ATUALIZAR TABELAS
        $sql = "UPDATE produto SET codprod_PK = '$codprod_PK', nomeprod ='$nomeprod' , catprod = '$catprod' , qtprod = '$qtprod' , precoun = '$precoun', imgprod = '$imgprod' , pesoprod = '$pesoprod' WHERE codprod_PK = '$codprod_PK';";

        if ($conexao->query($sql) === TRUE) {
            echo "Realizada a atualização do PRODUTO com Sucesso!";
        } else {
            echo "Erro de atulização:" . $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
