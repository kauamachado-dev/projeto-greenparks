<h1>Adicionar oficina</h1>
<?php
  include_once ('viacep.php');
  $address = getAddress();
?>
<form action="?page=salvar_oficina" method="POST">
    <input type="hidden" name="acao" value="cadastrar_oficina">
    <div class="mb-3">
        <label>Nome da oficina:</label>
        <input type="text" name="nome_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data da oficina:</label>
        <input type="date" name="data_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horario da oficina:</label>
        <input type="time" name="horario_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição da oficina:</label>
        <input type="text" name="desc_oficina" class="form-control">
    </div>
<div class="teste">
    <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep_oficina" id="teste" class="form-control" value="<?php echo $address->cep ?>">
    </div>
    <input type="submit">
    <div class="mb-3">
        <label>Bairro:</label>
        <input type="text" name="" class="form-control" value="<?php echo $address->bairro ?>">
    </div>
    <div class="mb-3">
        <label>Rua:</label>
        <input type="text" name="" class="form-control" value="<?php echo $address->logradouro ?>">
    </div>
    <div class="mb-3">
        <label>Número do local:</label>
        <input type="text" name="num_ende_eventos" class="form-control">
    </div>
</div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>