<?php
session_start();
include('connection.php');
//print_r($_SESSION);
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
                <a class="nav-link active m-2" href="./view-courses.php">Meus cursos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active m-2" href="./logout.php">Sair</a>
            </li>
        </ul>
    </div>


    <div class="card-body text-left">
        <h5 class="card-title text-center">A melhor seleção de cursos</h5>
        <ul class="list-unstyled">
            <li class="media  my-4">
                <img src="img/imgjava.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Java</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <p><a href="./courses.php?id=1" class="btn btn-primary mt-1">Obter curso</a></p>
                </div>
            </li>
            <hr>
            <li class="media my-4">
                <img src="img/imgpython.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Python</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <p><a href="./courses.php?id=4" class="btn btn-primary mt-1" name="5">Obter curso</a></p>
                </div>
            </li>
            <hr>
            <li class="media my-4">
                <img src="img/imgphp.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">PHP</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <p><a href="./courses.php?id=3" class="btn btn-primary mt-1" name="3">Obter curso</a></p>
                </div>
            </li>
            <hr>
            <li class="media my-4">
                <img src="img/imgsql.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">SQL</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <p><a href="./courses.php?id=6" class="btn btn-primary mt-1">Obter curso</a></p>
                </div>
            </li>
            <hr>
            <li class="media my-4">
                <img src="img/imgjs.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Javascript</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <p><a href="./courses.php?id=2" class="btn btn-primary mt-1">Obter curso</a></p>
                </div>
            </li>
            <hr>
            <li class="media my-4">
                <img src="img/imgphoto.jpg" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Photoshop</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <p><a href="./courses.php?id=5" class="btn btn-primary mt-1">Obter curso</a></p>
                </div>
            </li>
        </ul>




    </div>
    </div>
</body>

</html>