<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar_oficina':
                $nome = $_POST["nome_usuario"];
                $sobrenome = $_POST["sobrenome_usuario"];
                $nascimento = $_POST["nasc_usuario"];
                $email = $_POST["email_usuario"];
                $fone = $_POST["fone_usuario"];
                $cpf = $_POST["cpf_usuario"];
                $senha = $_POST["senha_usuario"];
                $tipo = $_POST["id_tipo_usuario"];
                $responsavel = $_POST["id_responsavel"];

                $sql = "INSERT INTO usuario (nome_usuario, sobrenome_usuario, nasc_usuario, email_usuario, fone_usuario, cpf_usuario, senha_usuario, id_tipo_usuario, id_responsavel) VALUES ('{$nome}', '{$sobrenome}', '{$nascimento}', '{$email}', '{$fone}', '{$cpf}' , '{$senha}' , '{$tipo}' , '{$responsavel}')";
                
                $res = $conexaoMysqli->query($sql);

                if($res==true){
                    print "<script>alert('usuário cadastrada com sucesso');</script>";
                    print "<script>location.href='?page=listar_oficina';</script>";
                
                }else{
                        print "<script>alert('Não foi possivel cadastrar o usuário');</script>"; 
                }
            break;
    }
?>