<?php 
 include("../conexao.php"); /* Inclui a conexão com o banco de dados */

$nome_responsavel = $_POST["nome_responsavel"];
$sobrenome_responsavel = $_POST["sobrenome_responsavel"];
$cpf_responsavel = $_POST["cpf_responsavel"];

$sql = "UPDATE responsavel SET 
            nome_responsavel='{$nome_responsavel}',
            sobrenome_responsavel='{$sobrenome_responsavel}',
            cpf_responsavel='{$cpf_responsavel}'
        WHERE 
            id_responsavel ='19'";
            
    $res_r = $conexaoMysqli->query($sql);

 $nome_usuario = $_POST["nome_usuario"];
 $sobrenome_usuario = $_POST["sobrenome_usuario"];
 $nasc_usuario = $_POST["nasc_usuario"];
 $cpf_usuario = $_POST["cpf_usuario"];
 $email_usuario = $_POST["email_usuario"];
 $fone_usuario = $_POST["fone_usuario"];
 $senha_usuario = $_POST["senha_usuario"];
 $id_responsavel = "19";

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
              id_usuario= '23'";

  $res_u = $conexaoMysqli->query($sql);

         if($res_u && $res_r==true){
             print "<script>alert('Editado com sucesso');</script>";
            //print "<script>location.href='';</script>";
         }else{
             print "<script>alert('Não foi possivel editar');</script>"; 
            //print "<script>location.href='';</script>";
         }
?>