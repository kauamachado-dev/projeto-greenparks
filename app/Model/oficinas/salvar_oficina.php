<?php 
    switch ($_REQUEST["acao"]) {
            case 'cadastrar_oficina':
                $nome_oficina = $_POST["nome_oficina"];
                $data_oficina = $_POST["data_oficina"];
                $horario_oficina = $_POST["horario_oficina"];
                $desc_oficina = $_POST["desc_oficina"];
                $cep_oficina = $_POST["cep_oficina"];
                $num_ende_oficinaa = $_POST["num_ende_oficina"];
                $id_usuario = $_POST["id_usuario"];

                $sql = "INSERT INTO oficina (nome_oficina, data_oficina, horario_oficina, desc_oficina, cep_oficina, num_ende_oficina, id_usuario) VALUES ('{$nome_oficina}', '{$data_oficina}', '{$horario_oficina}', '{$desc_oficina}', '{$cep_oficina}', '{$num_ende_oficina}', '{$id_usuario}')";
                
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

            case 'editar_oficina':
                $nome_oficina = $_POST["nome_oficina"];
                $data_oficina = $_POST["data_oficina"];
                $horario_oficina = $_POST["horario_oficina"];
                $desc_oficina = $_POST["desc_oficina"];
                $cep_oficina = $_POST["cep_oficina"];
                $num_ende_oficina = $_POST["num_ende_oficina"];
                $id_usuario = $_POST["id_usuario"];
                $sql = "UPDATE oficina SET 
                            nome_oficina='{$nome_oficina}',
                            data_oficina='{$data_oficina}',
                            horario_oficina='{$horario_oficina}',
                            desc_oficina='{$desc_oficina}',
                            cep_oficina='{$cep_oficina}',
                            num_ende_oficina='{$num_ende_oficina}',
                            id_usuario='{$id_usuario}',
                        WHERE 
                            id_oficina=".$_REQUEST["id_oficina"];
    
                $res = $conexaoMysqli->query($sql);
    
                if($res==true){
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=listar_oficina';</script>";
                }else{
                    print "<script>alert('Não foi possivel editar');</script>"; 
                    print "<script>location.href='?page=listar_oficina';</script>";
                }
                    break;
    
                case 'excluir_oficina':
    
                $sql = "DELETE FROM oficina WHERE id_oficina=".$_REQUEST["id"];
    
                $res = $conexaoMysqli->query($sql);
    
                if($res==true){
                    print "<script>alert('Excluido com sucesso');</script>";
                    print "<script>location.href='?page=listar_oficina';</script>";
                }else{
                    print "<script>alert('Não foi possivel excluir');</script>"; 
                    print "<script>location.href='?page=listar_oficina';</script>";
                }
                break;
        }
?>