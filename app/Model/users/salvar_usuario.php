<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar_usuario':
                $nome_usuario = $_POST["nome_usuario"];
                $sobrenome_usuario = $_POST["sobrenome_usuario"];
                $nasc_usuario = $_POST["nasc_usuario"];
                $email_usuario = $_POST["email_usuario"];
                $fone_usuario = $_POST["fone_usuario"];
                $cpf_usuario = $_POST["cpf_usuario"];
                $senha_usuario = $_POST["senha_usuario"];
                $id_tipo_usuario = $_POST["id_tipo_usuario"];
                $id_responsavel = $_POST["id_responsavel"];

                $sql = "INSERT INTO usuario (nome_usuario, sobrenome_usuario, nasc_usuario, email_usuario, fone_usuario, cpf_usuario, senha_usuario, id_tipo_usuario, id_responsavel) VALUES ('{$nome_usuario}', '{$sobrenome_usuario}', '{$nasc_usuario}', '{$email_usuario}', '{$fone_usuario}', '{$cpf_usuario}', '{$senha_usuario}', '{$id_tipo_usuario}', '{$id_responsavel}')";
                
                $res = $conexaoMysqli->query($sql);

                if($res==true){
                    print "<script>alert('usuario cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=listar_usuario';</script>";
                }
                else{
                    print "<script>alert('Não foi possivel cadastrar o usuario');</script>"; 
                    print "<script>location.href='?page=listar_usuario';</script>";
                }
            break;
?>            