<?php
include('connection.php');


    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];

    $select = "select usuario from tb_usuarios where usuario = '{$user}'";
    $result_s = mysqli_query($con, $select);

    if(mysqli_num_rows($result_s) > 0 ) {
        echo "<script>alert('Já existe um usuário com este login. Por favor, escolha outro!');
        window.location = 'view-cadastro.php'; </script>";
    } 
    else {

        echo "insert into tb_usuarios(usuario, senha, nome, email, sexo) values('{$user}', '{$password}', '{$nome}', '{$email}','{$sexo}')";
        $query = "insert into tb_usuarios(usuario, senha, nome, email, sexo) values('{$user}', '{$password}', '{$nome}', '{$email}','{$sexo}')";
        var_dump($query);
        
        $result = mysqli_query($con, $query);

        echo "<script>alert('Cadastro concluido com sucesso!');
        window.location = 'index.php'; </script>";
    }
    ?>


