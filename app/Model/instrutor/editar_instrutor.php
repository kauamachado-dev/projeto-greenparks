<?php 
 include("../conexao.php"); /* Inclui a conexão com o banco de dados */

 $nome_usuario = $_POST["nome_usuario"];
 $sobrenome_usuario = $_POST["sobrenome_usuario"];
 $nasc_usuario = $_POST["nasc_usuario"];
 $cpf_usuario = $_POST["cpf_usuario"];
 $email_usuario = $_POST["email_usuario"];
 $fone_usuario = $_POST["fone_usuario"];
 $senha_usuario = $_POST["senha_usuario"];
 $id_responsavel = "";

  $sql = "UPDATE usuario SET 
              nome_usuario='{$nome_usuario}',
              sobrenome_usuario='{$sobrenome_usuario}',
              nasc_usuario='{$nasc_usuario}',
              cpf_usuario='{$cpf_usuario}',
              email_usuario='{$email_usuario}',
              fone_usuario='{$fone_usuario}',
              senha_usuario='{$senha_usuario}',
              id_responsavel='{$id_responsavel}'
         WHERE 
              id_usuario= '14'";

  $res = $conexaoMysqli->query($sql);

         if($res==true){
             print "<script>alert('Editado com sucesso');</script>";
             print "<script>location.href='';</script>";
         }else{
             print "<script>alert('Não foi possivel editar');</script>"; 
             print "<script>location.href='';</script>";
         }
?>