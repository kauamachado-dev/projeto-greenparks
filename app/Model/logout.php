<?php
// INICIA SESSÃO.
session_start();
 
// REMOVA AS VARIAVEIS DE SESSÃO.
$_SESSION = array();
 
// DESTROI A SESSÃO.
session_destroy();
 
// REDIRECIONA PARA PÁGINA DE LOGIN.
header("location: login.php");
exit;
?>