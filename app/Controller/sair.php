<?php
// Inicia a sessão 
session_start();

// Destroi a sessão id_usuario e volta para o login
unset($_SESSION['id_usuario']);
header('location: ../../index.php'); 


?>