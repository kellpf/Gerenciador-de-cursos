<?php
session_start();
include('connection.php');
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="card-header row">
        <ul class="nav nav-pills card-header-pills col-6">
            <li class="nav-item ml-5 ">
                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #007bff;">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"></path>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"></path>
                </svg>
            </li>

            <li class="nav-item ml-2 mt-3">
                <h6>Seja bem vindo, <?php echo $_SESSION['usuario']; ?>!</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link active ml-5 m-2" href="home.php">Inicio</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link active m-2" href="#">Meus cursos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active m-2" href="./logout.php">Sair</a>
            </li>
        </ul>
    </div>

    <?php
    $user = $_SESSION['usuario'];

    $query = "select id_curso, nome_curso from tb_cursos
    inner join tb_cursos_usuario on fk_id_curso = id_curso
    where fk_usuario = '{$user}'";
    
    $result = mysqli_query($con, $query);

    echo "<b>Seus Cursos<b>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<br>"."<br>".$row[1];
    }
    ?>
</body>

</html>