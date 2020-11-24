<?php
session_start();
session_destroy(); //destroi 
header('Location: index.php');
exit();
?>