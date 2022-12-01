<?php
//Arquivo para deslogar
    //Inicia a sessão
    session_start(); 

    //Destroi a sessão se possuir um id_usuario
    unset($_SESSION['id_usuario']); 
    //Manda ele devolta para a página login.php...
    header("location: ../Model/login.php"); 

?>