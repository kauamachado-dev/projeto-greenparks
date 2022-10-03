<?php
session_start();
ob_start();
unset($_SESSION['id_usuario'], $_SESSION['nome_usuario']);
$_SESSION['msg'] = "<p style='color: green'>Deslogado com sucesso!</p>";

header("Location: login/index.php");