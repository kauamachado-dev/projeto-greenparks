<?php 
if(isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'login/conexao.php';
    require 'login/usuarios.php';

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if($u->login($email, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: _php/index.php");
        }else{
            header("Location: login/login.html");
        }

        }else{
            header("location: login/login.php")
        }
?>