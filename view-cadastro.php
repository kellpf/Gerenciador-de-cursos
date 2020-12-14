<?php
//session_start();
include('connection.php');
?>

<html lang=pt-br>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="container center ">
        <div class="col-10 mt-5 ml-5 card center">
            <form class="form" action="cadastrar.php" method="POST">
                
                <div class="col-10  ml-5 center">
                <br>
                <h5>Cadastro de usuário</h5>
                <br>
                    <label>Login</label>
                    <input type="text" class="form-control center" name="usuario" placeholder="Escolha um login" required>

                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="Escolha uma senha" name="senha" required>

                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Digite seu nome completo" name="nome" required>

                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="Digite seu e-mail" name="email" required>

                    <label>Sexo</label> 
                    <select class="form-control" aria-label=".form-select-lg example" name="sexo" required>
                        <option selected>Selecione</option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
                    <br>
                </div>
            </form>
        </div>
</body>

</html>