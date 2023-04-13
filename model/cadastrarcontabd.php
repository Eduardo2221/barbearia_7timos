<?php
    include_once '../controller/conexao.php';
        
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
    $nome = $_POST ["nome"]; //atribuindo do campo "nome" vindo do formulario para variavel
    $cpf = $_POST ["cpf"];
    $tel = $_POST ["tel"];
    $dtnasc = $_POST ["dtnasc"];
    $email = $_POST ["email"];
    $senha = $_POST ["senha"];
    // $niveis_acesso_id = $_POST ["niveis_acesso_id"];
    $niveis_acesso_id = 3;

    $senha = md5($senha);

    // SQL PARA INSERIR DADOS NA TABELAS ESPEFÍFICA
    $sql = "INSERT INTO usuarios (nome,cpf,tel,dtnasc,email,senha,niveis_acesso_id)
    VALUE ('$nome','$cpf','$tel','$dtnasc','$email','$senha','$niveis_acesso_id');";

    if ($conexao->query($sql) === TRUE) {
        echo  "<script>alert('Nova inserção de USUARIO realizada Sucesso!');</script>";
        // echo "Nova inserção de USUARIO realizada Sucesso!";
    } else {
        echo "Erro:" . $sql . "<br>" . $conexao->error;
    }
    echo "<br>";
    $conexao->close();
    header('location: ../view/usuario.html');
?>