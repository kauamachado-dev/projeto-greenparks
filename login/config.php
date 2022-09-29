<?php

    $conn=mysqli_connect("localhost","root","","greenpark");

    if(mysqli_connect_error()){
        echo"<script>alert('Conexão falhou');</script>";
        exit();
    }
    
?>