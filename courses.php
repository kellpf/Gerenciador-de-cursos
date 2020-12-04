<?php
session_start();
include('connection.php');

    $user = $_SESSION['usuario'];
    $id_curso = $_GET['id'];
    echo $user;
    $query = "select * from tb_usuarios where usuario = '{$user}'";
    $result = mysqli_query($con, $query);
    //while pegar valores do bd
    /**
     * while ($row = mysqli_fetch_array($result)) {
     *    echo "", $row[0] . " " . $row[1] . "<br>";
     * }
     * */

    $query2 = "select * from tb_cursos_usuario where fk_usuario = '{$user}' and fk_id_curso = '{$id_curso}'";
    $result2 = mysqli_query($con, $query2);
    $row = mysqli_num_rows($result2);

    if ($row == 0) {
        $query3 = $con->prepare("insert into tb_cursos_usuario (fk_id_curso, status_curso, fk_usuario) values (?, 'cursando',?)");
        $query3->bind_param("ss", $id_curso, $user);
        $query3->execute();
        echo  "<script>alert('Curso adicionado com sucesso!');
        window.location = 'home.php'; </script>";
        

    } else {
        echo  "<script>alert('Você já possui este curso!');
        window.location = 'home.php';</script>";
    }
?>