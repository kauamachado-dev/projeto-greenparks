<h1 style="font-family:'Passion One'; margin-top:6%; font-size:80px; color:#09400A">Adicionar oficina</h1>
<div class="linha1"></div>
<?php

?>
<form action="?page=salvar_oficina" method="POST">
    <input type="hidden" name="acao" value="cadastrar_oficina">
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Nome da oficina:</label>
        <input type="text" name="nome_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Data da oficina:</label>
        <input type="date" name="data_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Horario da oficina:</label>
        <input type="time" name="horario_oficina" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Descrição da oficina:</label>
        <input type="text" name="desc_oficina" class="form-control">
    </div>
<div class="teste">
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">CEP:</label>
        <input type="text" name="cep_oficina" id="teste" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Número do local:</label>
        <input type="text" name="num_ende_oficina" class="form-control">
    </div>
</div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>