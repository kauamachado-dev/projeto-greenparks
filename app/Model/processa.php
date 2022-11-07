<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar':
                $nome = $_POST["nome_usuario"];
                $sobrenome = $_POST["sobrenome_usuario"];
                $nasc = $_POST["nasc_usuario"];
                $email = $_POST["email_usuario"];
                $fone = $_POST["fone_usuario"];
                $cpf = $_POST["cpf_usuario"];
                $senha = $_POST["senha_usuario"];
                $id_tipo_usuario = "2";
                $id_responsavel = "1";
            
                $sql = "INSERT INTO oficina (nome_usuario, sobrenome_usuario, nasc_usuario, email_usuario, fone_usuario,
                cpf_usuario, senha_usuario, id_tipo_usuario, id_responsavel) VALUES ('{$nome}', '{$sobrenome}', '{$nasc}', '{$email}', '{$fone}', '{$cpf}', '{$senha}', '{$id_tipo_usuario}', '{$id_responsavel}')";
                
                $res = $conexaoMysqli->query($sql);

                if($res==true){
                    print "<script>alert('oficina cadastrada com sucesso');</script>";
                    print "<script>location.href='?page=listar_oficina';</script>";
                }
                else{
                    print "<script>alert('Não foi possivel cadastrar a oficina');</script>"; 
                    print "<script>location.href='?page=listar_oficina';</script>";
                }
            break;
    }
?>            