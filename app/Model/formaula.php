<?php
session_start();

include("conexao.php");

 $sql = "SELECT * FROM usuario";

 $res = mysqli_query($conexaoMysqli,$sql);
 $row = $res->fetch_object();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>FORMULÁRIO</title>
  <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
  <link href="../View/css/form_aula.css" rel="stylesheet">
</head>
<body>  
<form action="cad_aula.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="single-input">
            <label for="nome" style="font-family:'Passion One'; font-size:60px; color:#128013; top:10%;">Nome:</label>
            <input required type="text" name="nome_usuario" id="nome" class="input" value="<?php print $row->nome_usuario ?>";>
            <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario ?>">
          </div>
        </div>
       <br> Oficinas:
            <select name="id_oficina">
              <option >Selecione</option>
                <?php
                  $sql = "SELECT a.* , o.* FROM aula a LEFT JOIN oficina o ON a.id_oficina = o.id_oficina";
                  $result = mysqli_query($conexaoMysqli, $sql);
                  while($row = mysqli_fetch_assoc($result)){ ?>
                  $res = mysqli_query($conexaoMysqli, $sql);
                  while($row = mysqli_fetch_assoc($res)){ ?>
                    <option value="<?php echo $row['id_oficina']?>">
                      <?php echo $row['nome_oficina']; ?>
                    </option> <?php
                  }
                ?>
            </select></br>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>