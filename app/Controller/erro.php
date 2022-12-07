<?php
    session_start();
        echo "Olá: ". $_SESSION['nome_usuario'];    
?>
<h1>OPSSS....</h1>
<a class="btn btn-danger ml-3" href="../Controller/sair.php"><img src="../View/css/images/erro.png" style="width: 20%">Sair da conta</a>
