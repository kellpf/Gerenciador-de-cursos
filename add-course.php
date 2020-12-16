<?php
session_start();
include('connection.php');
//print_r($_SESSION);

$nome_curso = $_POST['nome_curso'];
$descricao = $_POST['descricao'];

$query = "insert into tb_cursos(nome_curso, descricao) values('{$nome_curso}', '{$descricao}')";
$result = mysqli_query($con, $query);

echo "linhas afetadas:".$result;

if(mysqli_affected_rows($con) == 1 ) {
    echo "<script>alert('Curso adicionado com sucesso!');
         </script>";
}
else {
    echo "<script>alert('Não foi possivel adicionar o curso.');
    </script>";
}

/*
$query ="select nome_curso from tb_cursos";
$result = mysqli_query($con, $query);


while ($row = mysqli_fetch_array($result)) {
        echo $row[0]."<br>";
   }*/
?>