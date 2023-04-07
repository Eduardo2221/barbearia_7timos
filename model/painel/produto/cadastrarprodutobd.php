<!DOCTYPE html>
<!--
INSERÇÃO DE DADOS EM TABELAS
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

        // SQL PARA INSERIR DADOS NA TABELAS ESPEFÍFICA
        $sql = "INSERT INTO produto (codprod_PK,nomeprod,catprod,qtprod,precoun,imgprod,pesoprod)
        VALUE ('$codprod_PK','$nomeprod','$catprod','$qtprod','$precoun','$imgprod','$pesoprod');";

        if ($conexao->query($sql) === TRUE) {
            echo "Nova inserção de PRODUTO realizada Sucesso!";
        } else {
            echo "Erro:" . $sql . "<br>" . $conexao->error;
        }
        echo "<br>";
        $conexao->close();
        ?>
    </body>
</html>
