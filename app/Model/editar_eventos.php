<h1>editar evento</h1>
<?php
    $sql = "SELECT * FROM eventos WHERE id_eventos=".$_REQUEST["id"]; 
    $res = $conexaoMysqli->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_eventos" value="<?php print $row->id_eventos; ?>">
    <div class="mb-3">
        <label>Nome do Evento:</label>
        <input type="text" name="nome_eventos" value="<?php print $row->nome_eventos; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data do Evento:</label>
        <input type="date" name="data_eventos" value="<?php print $row->data_eventos; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario do Evento:</label>
        <input type="time" name="horario_eventos" value="<?php print $row->horario_eventos; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição do Evento:</label>
        <input type="text" name="desc_eventos" value="<?php print $row->desc_eventos; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="id_endereco" value="<?php print $row->id_endereco; ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>