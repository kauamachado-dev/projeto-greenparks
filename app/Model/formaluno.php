<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>FORMULÁRIO</title>
    <script src='_js/controlle-aluno.js'></script>
    <link href="../View/css/formaluno.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--header>
        <nav>
            <a class="logo" href="index.html">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="sobre.html">SOBRE</a></li> 
                <li><a href="aula.html">AULAS</a></li> 
                <li><a href="evento.html">EVENTOS</a></li>     
            </ul>
        </nav>
    </header>-->
    <div class="titulo1">ALUNO</div>
<div class="linha1"></div>
        <form action="_php/cadastro.php">

            <div class="container">
        <div class="row">
        <div class="col">
            <div class="single-input">
                <input required type="text" name="" id="nome" class="input" placeholder="Nome do aluno...">
                <label for="nome">Nome</label>
            </div>
        </div>
        <div class="col">
            <div class="single-input">
                <input required type="date" name="" id="datanascaluno" class="input">
                <label for="datanascaluno">Nascimento</label>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="single-input">
                    <input required type="text" name="" id="nomeresponsavel" class="input" placeholder="Nome do responsável...">
                    <label for="nomeresponsavel">Nome Responsável</label>
                </div>
            </div>
                <div class="col">
                    <div class="single-input">
                        <input required type="tel" name="" id="telefonealuno" class="input" placeholder="Informe um telefone...">
                        <label for="telefonealuno">Telefone</label>
                    </div>
                </div>
            </div>
        <div class="row">
        <div class="col">
            <div class="single-input">
                <input required type="cpf" name="" id="cpfaluno" class="input" placeholder="CPF do aluno...">
                <label for="cpfaluno">CPF Aluno</label>
                </div>
            </div>
            <div class="col">
                <div class="single-input">
                    <input required type="cpf" name="" id="cpfresponsavel" class="input" placeholder=" CPF do responsável...">
                    <label for="cpfresponsavel">CPF Responsável</label>
                </div>
            </div>   
        </div>
        <div class="row">
           <div class="col">
            <div class="single-input">
                <input required type="email" name="" id="emailaluno" class="input" placeholder="Seu e-mail...">
                <label for="emailaluno">E-mail</label>
            </div>
        </div>
           <div class="col">
            <div class="single-input">
                <input required type="password" name="" id="senhaaluno" class="input" placeholder="Uma senha...">
                <label for="senhaaluno">Senha</label>
            </div>
           </div>
           <div class="col">
            <div class="single-input">
                <input required type="cep" name="" id="cepaluno" class="input" placeholder="Seu CEP...">
                <label for="cepaluno">CEP</label>
            </div>
           </div>
            </div>
           <div class="row">
           <div class="col">
            <div class="single-input">
                <input required type="address" name="" id="enderecoaluno" class="input" placeholder="Seu endereço...">
                <label for="enderecoaluno">Endereço</label>
            </div>
           </div>
        <div class="col">
            <div class="single-input">
                <input required type="address" name="" id="bairro" class="input"placeholder="Seu bairro...">
                <label for="bairro">Bairro</label>
            </div>
        </div>
            <div class="col">
                <div class="single-input">
                    <input required type="number" name="" id="numeroaluno" class="input" placeholder="Nº de sua casa...">
                    <label for="numeroaluno">Nº</label>
                </div>
            </div>
        </div>
        </div>
        <div>
        <div>
      <div class="text-center pt-1 mb-5 pb-1">
        <div class="form-group">
                <input type="submit" class="btn1" value="CRIAR CONTA">
                <input type="reset" class="btn2" value="APAGAR DADOS">
        </div>
            <p class="login" >Já tem uma conta? <a href="login.php">Entre aqui</a>.</p> 
        </div> 
        </form>

</body>
</html>