<?php
session_start();
include('connection.php');


$id_curso = $_GET['id'];
//echo $id_curso;
$select = "delete from tb_cursos where id_curso = '{$id_curso}'";
$result_s = mysqli_query($con, $select);
echo  "<script>alert('Curso deleteado com sucesso!');
        window.location = 'view-admin.php'; </script>";

?>