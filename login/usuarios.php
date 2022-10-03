<?php 
    class Usuario{

        public function login($email, $senha){
            global $pdo;
            $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email, $email");
            $sql->bindValue("senha, $senha");
            $sql->execute();
        }
    }
    if($sql->rowCount() > 0){
        $dado = $sql->fetch();

        echo $dado['id_usuario'];

         $_SESSION['idUser'] = $dado['id_usuario'];
        return true;
    }else{
        return false;
}    
?>