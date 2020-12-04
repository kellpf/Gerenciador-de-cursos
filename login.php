<?php
session_start();
include('connection.php');
/**
 * 
 * if (empty($POST['usuario']) || empty($POST['senha'])) {
 * header('Location: index.php');
 * exit();
 * }
 */
 
$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select  usuario from tb_usuarios where usuario= '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($con, $query);


/**
 * mysqli_num_rows() -> retorna o número de linhas encontradas
 * caso não encontre nada retorna 0
 */
$row = mysqli_num_rows($result);

if($row == 1 ) {
    $_SESSION['usuario'] = $usuario;
    header('Location: home.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true; 
    header('Location: index.php');
    exit();
}