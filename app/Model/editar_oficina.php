<h1>editar oficina</h1>
<?php
    $sql = "SELECT * FROM oficina WHERE id_oficina=".$_REQUEST["id"]; 
    $res = $conexaoMysqli->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar_oficina" method="POST">
    <input type="hidden" name="acao" value="editar_oficina">
    <input type="hidden" name="id_oficina" value="<?php print $row->id_oficina; ?>">
    <div class="mb-3">
        <label>Nome da oficina:</label>
        <input type="text" name="nome_oficina" value="<?php print $row->nome_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da oficina:</label>
        <input type="date" name="data_oficina" value="<?php print $row->data_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario da oficina:</label>
        <input type="time" name="horario_oficina" value="<?php print $row->horario_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição da oficina:</label>
        <input type="text" name="desc_oficina" value="<?php print $row->desc_oficina; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="id_endereco" value="<?php print $row->id_endereco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Usuario:</label>
        <input type="text" name="id_usuario" value="<?php print $row->id_usuario; ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>