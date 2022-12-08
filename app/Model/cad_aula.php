<?php 
include("conexao.php");

$id_usuario = $_POST["id_usuario"];
$id_oficina = $_POST["id_oficina"];

$sql = "INSERT INTO aula (id_usuario, id_oficina) VALUES ('{$id_usuario}', '{$id_oficina}')";

$res = $conexaoMysqli->query($sql);

if($res==true){
    print "<script>alert('cadastrada(o) na oficina com sucesso');</script>";
    print "<script>location.href='../Pages/aula.php';</script>";
}
else{
    print "<script>alert('Não foi possivel se cadastrar na oficina');</script>"; 
    print "<script>location.href='../Pages/aula.php';</script>";
}
?>