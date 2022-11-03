
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>SOBRE NÓS</title>
    <link href="../View/css/sobre.css" rel="stylesheet">
</head>
<body>
    <header>
    <!--ÍNICIO DO MENU DE NAVEGAÇÃO-->
    <header>
        <nav>
            <a class="logo" href="index.php">GREEN PARKS</a>
            <ul class="nav-list">
                <li><a href="index.php">INÍCIO</a></li>
                <li><a style="color: #ffe60b" href="sobre.php">SOBRE</a></li> 
                <li><a href="aula.php">AULAS</a></li> 
                <li><a href="evento.php">EVENTOS</a></li>   
            </ul>
        </nav>
    </header> 
</body>
</html>

<!--sequencia dos slides-->

<div class="container">
    <input type="radio" name="slider" id="s1" checked>
    <input type="radio" name="slider" id="s2">
    <input type="radio" name="slider" id="s3">
    <input type="radio" name="slider" id="s4">

  <!--slides carrousel click-->
    <div class="cards">

        <label for="s1" id="slidel">
            <div class="image">
                <img src="projeto-greenparks/app/View/css/images/fatima.jpeg" alt="Designer">
                <div class="dots">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

            <div class="infos">
                <span class="name" Designer></span>
                <span class="lorem">Designer Fatima elabora designes do site e representações visuais.</span>

                <a href="/detals" class="btn-details"></a>

            </div>
        </label>

<!--slide 2-->
<div class="cards">

<label for="s2" id="slide2">
    <div class="image">
        <img src="projeto-greenparks/app/View/css/images/kaua.jpeg" alt="Programador">
        <div class="dots">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

    <div class="infos">
        <span class="name" Programador></span>
        <span class="lorem">Desenvolvimento do site e funcionalidades.</span>

        <a href="/detals" class="btn-details"></a>
    </div>
</label>


<!--slide 3-->
<div class="cards">

<label for="s3" id="slide3">
    <div class="image">
        <img src="projeto-greenparks/app/View/css/images/stephane.jpeg" alt="Engenheira de Software">
        <div class="dots">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

    <div class="infos">
        <span class="name" Designer></span>
        <span class="lorem">Engenheira de software elabora banco de dados e funcionalidades do site.</span>

        <a href="/detals" class="btn-details"></a>

    </div>
</label>

      <!--slide 4-->

        <div class="cards">

            <label for="s4" id="slide4">
                <div class="image">
                    <img src="projeto-greenparks/app/view/css/images/giovanna.jpeg" alt="Designer">
                    <div class="dots">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
           </div>
      </div>

                <div class="infoss">
                    <span class="name" Designer></span>
                    <span class="lorem">Designer do site elabora projeto visual do site.</span>

                    <a href="/detals" class="btn-details"></a>  

                </div>
            </label>
</div>

    <!--FINAL DO MENU DE NAVEGAÇÃO-->
</body>
</html>
