<?php 
session_start();
ob_start();
include_once 'conexao.php';

    if(isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['senha']) && !empty($_POST['senha'])){

        require 'app/Model/conexao.php';
        require 'app/Model/usuario.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if($u->login($email, $senha) == true);
            if(isset($_SESSION['idUser'])){
               header("Location: index.html")
        }else{
            header("Location: app/Model/login.php");
        }

    }else{
            header("Location: app/Model/login.php");
            }

?>