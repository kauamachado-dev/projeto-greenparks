<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SOBRE NÓS</title>
    <link href="../View/css/stilo.css" rel="stylesheet">
    <link href="../View/css/sobre.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Controller/_js/sobre.js" defer></script>
    <link rel="shortcut icon" href="../View/css/images/logo.png" type="image/x-icon">
    
  </head>
  <body>
    
  <header>
        <nav>
        <a class="logo" href="index.php"><img class="logo" src="../View/css/images/logoprincipal.png"></a>
            <ul class="nav-list">
                <li><a href="index.php">INÍCIO</a></li>
                <li><a style="color: #ffe60b" href="sobre.php">SOBRE</a></li>
                <li><a href="aula.php">AULAS</a></li>
                <li><a href="evento.php">EVENTOS</a></li>
                <div id="menu" class="menu" data-aberto="false">
  <span id="menu-trigger" class="login">
    <i class="fa fa-plus"></i>
    <i class="fa fa-minus"></i>
  </span>
  <ul class="menu-menu">
    <li><a href='../Model/login.php'>Login</a></li>
    <li><a href='../Pages/instrutor.php'>Professor</a></li>
    <li><a href='../Pages/aluno.php'>Aluno</a></li>
    <li><a href='../Controller/sair.php'>Sair</a></li>
  </ul>
</div>
            </ul>
        </nav>
    </header>
    <svg  class="ondain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>

    <div class="wrapper-container">
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
        <img src="../View/css/team/img-1.jpg" alt="img" draggable="false">
        <img src="../View/css/team/img-3.jpg" alt="img" draggable="false">
        <img src="../View/css/team/img-2.jpg" alt="img" draggable="false">
        <img src="../View/css/team/img-5.jpg" alt="img" draggable="false">
        <img src="../View/css/team/img-4.jpg" alt="img" draggable="false">
        <img src="../View/css/team/img-7.jpg" alt="img" draggable="false">
        <img src="../View/css/team/img-6.jpg" alt="img" draggable="false">

        <img src="../View/css/team/stephane.png" alt="img" draggable="false">
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
</div>

        <div class="titulo1">SOBRE NÓS</div>
        <div class="linha1"></div>
<!--TEXTO, IMAGENS, TÍTULO INICIO-->
<div class="sobre">
        <p>Green Parks é um projeto de um grupo de estudantes</p>
        <p>da escola social Marista Ir. Acácio, na zona norte</p>
        <p>de Londrina. A ideia do nosso projeto surgiu devido</p>
        <p>a nescessidade de promover a prática de esportes e </p>
        <p>combater o sedentarismo entre crianças e adolescetes.</p>
        <p>Por isso decidimos divulgar aulas para esse público de</p>
        <p>forma gratuita! E para promover o lazer da população, </p>
        <p>divulgamos os próximos eventos da região! Conheça </p>
        <p>mais dos nossos desenvolvedores:</p>
    </div>



    <script type="text/javascript">
    
            // Plugin code
            (function ($) {
                /** Polyfills and prerequisites **/

                // requestAnimationFrame Polyfill
                var lastTime    = 0;
                var vendors     = ['webkit', 'o', 'ms', 'moz', ''];
                var vendorCount = vendors.length;

                for (var x = 0; x < vendorCount && ! window.requestAnimationFrame; ++x) {
                    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
                    window.cancelAnimationFrame  = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
                }

                if ( ! window.requestAnimationFrame) {
                    window.requestAnimationFrame = function(callback) {
                        var currTime   = new Date().getTime();
                        var timeToCall = Math.max(0, 16 - (currTime - lastTime));

                        var id   = window.setTimeout(function() { callback(currTime + timeToCall); }, timeToCall);
                        lastTime = currTime + timeToCall;

                        return id;
                    };
                }

                if ( ! window.cancelAnimationFrame) {
                    window.cancelAnimationFrame = function(id) {
                        clearTimeout(id);
                    };
                }

                // Prefixed event check
                $.fn.prefixedEvent = function(type, callback) {
                    for (var x = 0; x < vendorCount; ++x) {
                        if ( ! vendors[x]) {
                            type = type.toLowerCase();
                        }

                        el = (this instanceof jQuery ? this[0] : this);
                        el.addEventListener(vendors[x] + type, callback, false);
                    }

                    return this;
                };

                // Test if element is in viewport
                function elementInViewport(el) {

                    if (el instanceof jQuery) {
                        el = el[0];
                    }

                    var rect = el.getBoundingClientRect();

                    return (
                        rect.top >= 0 &&
                            rect.left >= 0 &&
                            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                        );
                }

                // Random array element
                function randomArrayElem(arr) {
                    return arr[Math.floor(Math.random() * arr.length)];
                }

                // Random integer
                function randomInt(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                /** Actual plugin code **/
                $.fn.sakura = function (event, options) {

                    // Target element
                    var target = this.selector == "" ? $('body') : this;

                    // Defaults for the option object, which gets extended below
                    var defaults = {
                        blowAnimations: ['blow-soft-left', 'blow-medium-left', 'blow-soft-right', 'blow-medium-right'],
                        className: 'sakura',
                        fallSpeed: 1,
                        maxSize: 14,
                        minSize: 10,
                        newOn: 300,
                        swayAnimations: ['sway-0', 'sway-1', 'sway-2', 'sway-3', 'sway-4', 'sway-5', 'sway-6', 'sway-7', 'sway-8']
                    };

                    var options = $.extend({}, defaults, options);

                    // Default or start event
                    if (typeof event === 'undefined' || event === 'start') {

                        // Set the overflow-x CSS property on the target element to prevent horizontal scrollbars
                        target.css({ 'overflow-x': 'hidden' });

                        // Function that inserts new petals into the document
                        var petalCreator = function () {
                            if (target.data('sakura-anim-id')) {
                                setTimeout(function () {
                                    requestAnimationFrame(petalCreator);
                                }, options.newOn);
                            }

                            // Get one random animation of each type and randomize fall time of the petals
                            var blowAnimation = randomArrayElem(options.blowAnimations);
                            var swayAnimation = randomArrayElem(options.swayAnimations);
                            var fallTime = ((document.documentElement.clientHeight * 0.007) + Math.round(Math.random() * 5)) * options.fallSpeed;

                            // Build animation
                            var animations =
                                'fall ' + fallTime + 's linear 0s 1' + ', ' +
                                    blowAnimation + ' ' + (((fallTime > 30 ? fallTime : 30) - 20) + randomInt(0, 20)) + 's linear 0s infinite' + ', ' +
                                    swayAnimation + ' ' + randomInt(2, 4) + 's linear 0s infinite';

                            // Create petal and randomize size
                            var petal  = $('<div class="' + options.className + '" />');
                            var height = randomInt(options.minSize, options.maxSize);
                            var width  = height - Math.floor(randomInt(0, options.minSize) / 3);

                            // Apply Event Listener to remove petals that reach the bottom of the page
                            petal.prefixedEvent('AnimationEnd', function () {
                                if ( ! elementInViewport(this)) {
                                    $(this).remove();
                                }
                            })
                            // Apply Event Listener to remove petals that finish their horizontal float animation
                            .prefixedEvent('AnimationIteration', function (ev) {
                                if (
                                    (
                                        $.inArray(ev.animationName, options.blowAnimations) != -1 ||
                                        $.inArray(ev.animationName, options.swayAnimations) != -1
                                    ) &&
                                    ! elementInViewport(this)
                                ) {
                                    $(this).remove();
                                }
                            })
                            .css({
                                '-webkit-animation': animations,
                                animation: animations,
                                'border-radius': randomInt(options.maxSize, (options.maxSize + Math.floor(Math.random() * 10))) + 'px ' + randomInt(1, Math.floor(width / 4)) + 'px',
                                height: height + 'px',
                                left: (Math.random() * document.documentElement.clientWidth - 100) + 'px',
                                'margin-top': (-(Math.floor(Math.random() * 20) + 15)) + 'px',
                                width: width + 'px'
                            });

                            target.append(petal);
                        };

                        // Finally: Start adding petals
                        target.data('sakura-anim-id', requestAnimationFrame(petalCreator));

                    }
                    // Stop event, which stops the animation loop and removes all current blossoms
                    else if (event === 'stop') {

                        // Cancel animation
                        var animId = target.data('sakura-anim-id');

                        if (animId) {
                            cancelAnimationFrame(animId);
                            target.data('sakura-anim-id', null);
                        }

                        // Remove all current blossoms
                        setTimeout(function() {
                            $('.' + options.className).remove();
                        }, (options.newOn + 50));

                    }
                };
            }(jQuery));

            $(document).ready(function() {
                $('body').sakura();
            });

            
        </script>
 
            <!--ULTIMA ONDA-->
            <svg class="ondafin"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#5bb318" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,80C640,85,800,139,960,144C1120,149,1280,107,1360,85.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
    <!--RODAPÉ-->
    <img id="logomarista" src="../View/css/images/logomarista.png">
  </body>
</html>