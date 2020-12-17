<?php
session_start();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-3">
            </div>
            <div class="col-6 mt-5 card">
                <form class="form" action="login.php" method="POST">
                    <br>
                    <p class="text-center h4"> Zevelândia <br> </p>
                    <p class="text-center h5"> Cursos online </p>
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Login ou senha inválidos!
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <label>Login</label>
                    <input type="text" class="form-control" name="usuario">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha">
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                    <br>

                    <div class="row no-gutters bg-light position-relative">
                        <div class="col-md-8 position-static ">
                            <a href="view-cadastro.php" class="stretched-link text-primary">Ainda não é nosso aluno? Clique aqui!</a>
                        </div>
                    </div>



                </form>
            </div>
            <div class="col-3">

            </div>

        </div>
    </div>
</body>

</html>