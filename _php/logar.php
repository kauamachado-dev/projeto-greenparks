<?php 
if(isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['senha']) && !empty($_POST['senha'])){
 
    require '_php/conexao.php';
    require '_php/usuarios.php';

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
} else {
    header("location: login.html")
}
?>