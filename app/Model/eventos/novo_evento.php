<h1 style="font-family:'Passion One'; margin-top:6%; font-size:80px; color:#09400A margin-left: 30%">Adicionar eventos</h1>
<div class="linha1"></div>
<br><br>
<?php

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <h2 style="font-family:'Passion One'; margin-top:2%; font-size:40px; color:#09400A">Dados sobre o evento</h2>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Nome do Evento:</label>
        <input type="text" name="nome_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Data do Evento:</label>
        <input type="date" name="data_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Horario do Evento:</label>
        <input type="time" name="horario_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Descrição do Evento:</label>
        <input type="text" name="desc_eventos" class="form-control">
    </div>
    <br><br>
    <h2 style="font-family:'Passion One'; margin-top:2%; font-size:40px; color:#09400A">Local do evento</h2>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">CEP:</label>
        <input type="text" name="cep_eventos" class="form-control">
    </div>
    <div class="mb-3">
        <label style="font-family:'Arimo'; font-size: 20px;">Número da casa/local:</label>
        <input type="text" name="num_ende_eventos" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>