<?php
session_start();
include('connection.php');

$user = $_SESSION['usuario'];

$query = "select nome from tb_usuarios where usuario = '{$user}'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
echo $row[0];
 ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Document</title>
</head>
<body >
    <img class="cert" src="/Gerenciador-de-cursos/img/certificado01.jpg" width="950px" >
    <div class="corpo">
    <p><?php echo $row[0];?></p>
    <p>Certificado de conclusão de curso</p>
    <p>Dezembro de 2020</p>
    </div>
</body>
</html>