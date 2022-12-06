<?php
session_id();

$id = session_id();

session_start();

include("conexao.php");

 $sql = "SELECT * FROM usuario";

 $res = mysqli_query($conexaoMysqli,$sql);

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>FORMULÁRIO</title>
  <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
</head>
<body>  
<form action="cad_aula.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="single-input">
            <label for="nome">Nome:</label>
            <input required type="text" name="nome_usuario" id="nome" class="input" value="<?php echo $id['nome_usuario']; ?>">
          </div>
        </div>
       <br> Oficinas:
            <select name="seleciona_oficina">
              <option>Selecione</option>
                <?php
                  $sql = "SELECT a.* , o.* FROM aula a LEFT JOIN oficina o ON a.id_oficina = o.id_oficina";
                  $result = mysqli_query($conexaoMysqli, $sql);
                  while($row = mysqli_fetch_assoc($result)){ ?>
                    <option value="<?php echo $row['id_oficina']?>">
                      <?php echo $row['nome_oficina']; ?>
                    </option> <?php
                  }
                ?>
            </select></br>
    </div>
</form>
</body>
</html>