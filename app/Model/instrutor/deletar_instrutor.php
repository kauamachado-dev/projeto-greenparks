<?php
session_start();

include("conexao.php");

$sql = "DELETE FROM usuario WHERE id_usuario=".$_SESSION["id"];

            $res = $conexaoMysqli->query($sql); 

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir');</script>"; 
                print "<script>location.href='?page=listar';</script>";
            }
?>