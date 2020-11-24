<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'bd_gerenciador_cursos');

$con = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não foi possível conectar');

echo "pqp";