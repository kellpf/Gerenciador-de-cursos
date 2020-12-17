<?php
session_start();
include('connection.php');

$user = $_SESSION['usuario'];

$query = "select nome from tb_usuarios where usuario = '{$user}'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$query2 = "select  nome_curso from tb_cursos
    inner join tb_cursos_usuario on fk_id_curso = id_curso
    where fk_usuario = '{$user}'";

$result2 = mysqli_query($con, $query2);
$curso = mysqli_fetch_array($result2);


?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Document</title>
</head>

<body>
    <img class="cert" src="/Gerenciador-de-cursos/img/certificado01.jpg" width="950px">
    <div class="corpo">
        <p style="font-family: Impact, fantasy; font-size: 22;"><?php echo $row[0]; ?></p><br>
        <p style="font-family: Snell Roundhand, cursive;font-size: 22;"><i>Certificado de conclusão de curso de curso.</i> </p><br><br>
        <br>
        <p>Dezembro de 2020</p>
    </div>
</body>

</html>