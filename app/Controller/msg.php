<?php

    function msgErro() {        

        // Verificar se existe a mensagem
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];  // mostra a mensagem
            unset($_SESSION['msg']); // destroi a mensagem
        }
    }
?>