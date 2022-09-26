<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio web</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/9c5f1d9041.js" crossorigin="anonymous"></script>
</head>
<body class= "hidden" id="body">
    <div class="centrado" id="onload">
        <div class="loadingio-spinner-blocks-jovjzhyfg7"><div class="ldio-470boovlykg">
        <div style='left:38px;top:38px;animation-delay:0s'></div><div style='left:80px;top:38px;animation-delay:0.125s'></div><div style='left:122px;top:38px;animation-delay:0.25s'></div><div style='left:38px;top:80px;animation-delay:0.875s'></div><div style='left:122px;top:80px;animation-delay:0.375s'></div><div style='left:38px;top:122px;animation-delay:0.75s'></div><div style='left:80px;top:122px;animation-delay:0.625s'></div><div style='left:122px;top:122px;animation-delay:0.5s'></div>
        </div></div>
    </div>

    <header>
        <div class="icon_menu">
            <i class="fa-solid fa-bars"id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">
        <div class="name_page">
            <i class="fa-solid fa-code"></i>
            <h4>Paolo_Alvarez</h4>
        </div>

        <div class="options_menu">

            <a href="#" class="selected" id="page1">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#" id="page2">
                <div class="option" >
                    <i class="fas fa-file" title="Portafolio"></i>
                    <h4>Portafolio</h4>
                </div>
            </a>


            <a href="#">
                <div class="option">
                    <i class="fa-regular fa-address-book" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-regular fa-address-card" title="Nosotros"></i>
                    <h4>Sobre mí</h4>
                </div>
            </a>

            <a href="/index.php">
                <div class="option">
                    <i class="fa-regular fa-door-open" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>

         </div>

    </div>

    <main>
        <div class="inicio_page" id="div1" style="">
            <h1>Hola, soy programador</h1>
            <div class="inicio_page_contenido" id="divContenido">
                <img src="img/fotocv.jpeg
                " alt="">

                <p>
                    Un gusto, mi nombre es Jean Paolo Alvarez Velez y soy programador, llevo <br> 
                    aproximadamente 2 años programando en lenguajes como Java, Python, C++ <br> , Javascript, PHP
                    y Python. También cuento con conocimientos en Mysql. <br><br> Cuento con un portafolio de proyectos, en los cuales implemento los lenguajes <br>
                    de programación con los que más me he familiarizado los últimos 6 meses.
                    <br><br>Les invito a ver mis proyectos en la sección de portafolio de mi Sitio Web.
                </p>
            </div>

           <div class="second_inicio_page">
                <h1>Mis conocimientos</h1>
                <div class="inicio_page_conocimientos" id="divConocimiento" >
                    <div class="C1">
                        <img src="img/html-logo.png" alt="">
                        <div class="progressBar"></div>
                    </div>
                    <div class="C1">
                        <img src="img/csslogo.png" alt="">
                        <div class="progressBar"></div>
                    </div>
                    <div class="C1">
                        <img src="img/jslogo.png" alt="">
                        <div class="progressBar"></div>
                    </div>
                    <div class="C2">
                        <img src="img/phplogo.png" alt="">
                        <div class="progressBar"></div>
                    </div>
                    <div class="C2">
                        <img src="img/pythonlogo.png" alt="">
                        <div class="progressBar"></div>
                    </div>
                    <div class="C3">
                        <img src="img/sqlogo.png" alt="">
                        <div class="progressBar"></div>
                    </div>
                    
                </div>
           </div>

        </div>

        <div class="portafolio_page" id="div2" style="display:none" >
            <h2>Este es mi portafolio</h2>
            <p>Mis proyectos se basan en distintas tecnologias, etc.</p>
        </div>


        <div class="cursos_page" id="div3" style="display:none">
            <h2>Este son mis cursos grabados</h2>
            <p>Mi primer curso fue de html y me fue muy bien, aprendi un montón.</p>
        </div>

    </main>


    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  

</body>
</html>