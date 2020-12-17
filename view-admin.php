<?php
session_start();
include('connection.php');


?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Cadastrar Curso</title>
</head>

<body>

    <div class="card-header row">
        <ul class="nav nav-pills card-header-pills col-6">
            <li class="nav-item  ml-5 ">
                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #007bff;">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"></path>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"></path>
                </svg>
            </li>

            <li class="nav-item ml-2 mt-3">
                <h6>Seja bem vindo, <?php echo $_SESSION['admin']; ?>!</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link active ml-5 m-2" href="view-admin.php">Inicio</a>
            </li>

            <li class="nav-item" >
                <a class="nav-link active m-2" href="./logout.php">Sair</a>
            </li>
        </ul>
    </div>


    <div class="container mt-5 text-right ml-5 pl-5">
        <button type='button' class='btn btn-info '>
        <a href="view-add-course.php">
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle-fill' viewBox='0 0 16 16'>
                <path fill-rule='evenodd' d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z' />
            </svg>
            Adicionar Curso</a>
        </button>
    </div>

    <div class="container mt-5" action="delete-course.php">
        <h5 style="color: gray;">Cursos Atuais:</h5>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Curso</th>
                    <th scope="col text-center">Descrição</th>
                    <th scope="col"></th>
                </tr>
            </thead>


            <?php

            $select = "select id_curso, nome_curso, descricao from tb_cursos";
            $result = mysqli_query($con, $select);
            echo "<tbody>";

            while ($row = mysqli_fetch_array($result)) {
                echo " <th > $row[0]</th>";
                echo " <th scope='row'> $row[1] </th>";
                echo "<td  >  $row[2]  </td>";
                echo "
                <td>
                <button type='button' class='btn btn-info'>
                    <a href='./delete-course.php?id=$row[0]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                        </svg>
                    Excluir 
                    </a>
                </button>
                </td>";
                echo "</tr>";
            }
            echo "<tbody>";
            echo "</table>";
            ?>
    </div>

</html>