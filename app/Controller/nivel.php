<?php
// Inicia a sessão em todas as paginas referente a essa
session_start(); 

// Nivel de acesso para o administrador
function NivelAdm() {
   if (!isset($_SESSION['id_usuario'])) {  // Se usuario não estiver logado
        header("location: ../../../index.php");
        exit;
    } else if ($_SESSION['ativo'] != 1) { // Senão se usuario estiver inativo
        header("location: ../../../index.php");
        exit;
    } else if ($_SESSION['nivel'] != 2) { // Senão for colaborador
        header("location: ../../../index.php");
        exit;
    }
}

// Nivel de acesso para o colaborador
function NivelProf() {
    if (!isset($_SESSION['id_usuario'])) {  // Se usuario não estiver logado
        header("location: ../../../index.php");
        exit;
    }  else if($_SESSION['ativo'] != 1) { // Senão se usuario estiver inativo
        header("location: ../../../index.php");
        exit;
    }else if ($_SESSION['nivel'] != 3) {  // Senão for colaborador
        header("location: ../../../index.php");
        exit;
    }
}

// Nivel de acesso para o colaborador
function NivelAlun() {
    if (!isset($_SESSION['id_usuario'])) {  // Se usuario não estiver logado
        header("location: ../../../index.php");
        exit;
    }  else if($_SESSION['ativo'] != 1) { // Senão se usuario estiver inativo
        header("location: ../../../index.php");
        exit;
    }else if ($_SESSION['nivel'] != 4) {  // Senão for colaborador
        header("location: ../../../index.php");
        exit;
    }
}

?>