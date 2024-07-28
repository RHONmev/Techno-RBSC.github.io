<?php

session_start();

if(isset($_SESSION["usuario"])){
  echo"
  <script>alert('Sesion iniciada exitosamente');</script>
  ";

}else{
  echo"
  <script>alert('Por favor inicia sesion para acceder'); window.location = 'index.php';</script>
  ";
  //header("location: index.php");
  session_destroy();
  die();
}

?>

<!DOCTYPE html>
  <html>
    <head>
        <script src="https://kit.fontawesome.com/b54ceaaaed.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0 initial-scale=1.0"&amp;gt>
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <title>Tecno-RBSC</title>
    </head>
    <body>
      <button href="">cerrar sesion</button>
        <div class="hidden">
        <div id="cover-ctn-search">
        </div>
        <div class="borde">
      <header>
        <div class="ola" style="height: 30%; overflow: hidden;">
          <svg viewBox="0 0 500 140" preserveAspectRatio="none">
            <path d="M-22.85,65.63 C139.67,-48.83 320.26,161.36 535.26,35.05 L500.00,150.00 L0.00,150.00 Z">
            </path>
          </svg>
        </div>             
        <a class="bot" href="inicio.php">
          <nav> 
            <img class="imagen" alt="LogoRBSC" src="img/logo.png">
          </nav>
        </a>
        <div class="nave">
          <label for="toggle">
            &#9776;
          </label>
          <input type="checkbox" id="toggle"/>
          <div class="menu">
            <button onclick="window.location.href='inicio.php';" class="btnin" href="#">Inicio</button>
            <button onclick="window.location.href='/tienda/Blog.html';" class="btn">Blog</button>
            <button onclick="window.location.href='inicio.php';" class="btn" href="#">Perifericos</button>
            <button onclick="window.location.href='/tienda/Blog.html';" class="btn">Hardware</button>
            <button onclick="window.location.href='inicio.php';" class="btn" href="#">Software</button>
            <button onclick="window.location.href='php/cerrar_sesion_be.php';" class="btn">Cerrar sesion</button>
            <button id="search" class="btn" href="#"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
          </div>
        </div>
      </header>
      <div id="ctn-bars-search">
        <input type="text" id="inputsearch" placeholder="¿Qué deseas buscar?">
      </div>
      <div id="box-search">
        <li><a href="#:::"><i class="fa-solid fa-magnifying-glass"></i>:::</a></li>
        <li><a href="#perifericos"><i class="fa-solid fa-magnifying-glass"></i>Perifericos</a></li>
        <li><a href="#hardware"><i class="fa-solid fa-magnifying-glass"></i>Hardware</a></li>
        <li><a href="#software"><i class="fa-solid fa-magnifying-glass"></i>Software</a></li>
        <li><a href="#memes"><i class="fa-solid fa-magnifying-glass"></i>Memes</a></li>
      </div>
      <section class="txt-header" id=":::">
        <center>
          <h1>
            :::
          </h1>
        </center>
      </section>
      <center>
        <div class="Somos">
          <h1>Bienvenido a Techno-RBSC: Tu tienda tecnológica</h1>
          <br><br><br>
          <h6>En Techno-RBSC, nos apasiona la tecnología y queremos ofrecerte lo mejor en periféricos, hardware y software. ¿Qué puedes esperar de nosotros?</h6>
          <h1>Nuestros Servicios</h1>
          <br>
          <h2>1. Periféricos para Gamers</h2>
          <br><br><br>
          <h6>Desde impresoras clásicas hasta teclados de última generación, tenemos todo lo que necesitas para mejorar tu experiencia de juego.</h6>
          <br><br>
          <h2>2. Hardware Variado</h2>
          <br><br><br>
          <h6>Explora nuestra amplia gama de hardware, desde módulos de memoria DDR2 y DDR3 hasta procesadores compatibles con DDR4 y DDR5. ¡Diversidad garantizada!</h6>
          <br><br><br>
          <h2>3. Aplicaciones Personalizadas</h2>
          <br><br><br>
          <h6>¿Necesitas soluciones específicas? Ofrecemos aplicaciones y soporte adaptados</h6>
          <br>
        </div>
      </center>
      <section class="txt-header" id="perifericos">
        <center>
          <h1>
            Perifericos
          </h1>
        </center>
      </section>
      <div class="carruselCont">
        <div class="carruselList">

          <div class="track">
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/teclado.jpeg" alt="dios" class="redondo">  
                <h4>
                  Teclado
                </h4>
                <h2>
                  ($40.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/mouse.jpg" alt="dios" class="redondo">  
                <h4>
                  Mouse
                </h4>
                <h2>
                  ($22.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/mousepad.jpeg" alt="dios" class="redondo">  
                <h4>
                  Mouse Pad
                </h4>
                <h2>
                  ($17.000)
                </h2>
              </botton>
            </center>
          </div>
          </div>

          <div class="track">
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/joystick.jpg" alt="dios" class="redondo">  
                <h4>
                  Joystick
                </h4>
                <h2>
                  ($70.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/auriculares.jpeg" alt="dios" class="redondo">  
                <h4>
                  Auriculares
                </h4>
                <h2>
                  ($33.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/microfono.jpeg" alt="dios" class="redondo">  
                <h4>
                  Micrófono
                </h4>
                <h2>
                  ($53.000)
                </h2>
              </botton>
            </center>
          </div>
          </div>

          <div class="track">
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/tripode.jpeg" alt="dios" class="redondo">  
                <h4>
                  Web Cam
                </h4>
                <h2>
                  ($61.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/monitor.jpeg" alt="dios" class="redondo">  
                <h4>
                  Monitor
                </h4>
                <h2>
                  ($320.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/brazo.jpeg" alt="dios" class="redondo">  
                <h4>
                  Brazo Monitor
                </h4>
                <h2>
                  ($47.000)
                </h2>
              </botton>
            </center>
          </div>
          </div>

        </div>
      </div>
      <div class="botonis">
        <button class="carrusel-arrow .activo">
        </button>
        <button class="carrusel-arrow">
        </button>
        <button class="carrusel-arrow">
        </button>
      </div>
      /////////////////////////////////////////////////////
      <section class="txt-header" id="hardware">
        <center>
          <h1>
            Hardware
          </h1>
        </center>
      </section>
      <div class="carruselCont2">
        <div class="carruselList2">

          <div class="track2">
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/ryzen9.jpeg" alt="dios" class="redondo">  
                <h4>
                  Ryzen 9
                </h4>
                <h2>
                  ($700.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/i9.jpeg" alt="dios" class="redondo">  
                <h4>
                  Intel Core i9
                </h4>
                <h2>
                  ($700.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/motherasus.jpeg" alt="dios" class="redondo">  
                <h4>
                  Mother Asus AMD
                </h4>
                <h2>
                  ($400.000)
                </h2>
              </botton>
            </center>
          </div>
          </div>

          <div class="track">
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/motherintel.jpeg" alt="dios" class="redondo">  
                <h4>
                  Mother Asus INTEL
                </h4>
                <h2>
                  ($400.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/amd6900.jpg" alt="dios" class="redondo">  
                <h4>
                  AMD rx6900
                </h4>
                <h2>
                  ($1.400.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/asus4090.jpg" alt="dios" class="redondo">  
                <h4>
                  ASUS rtx 4090
                </h4>
                <h2>
                  ($1.400.000)
                </h2>
              </botton>
            </center>
          </div>
          </div>

          <div class="track">
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/ram.jpeg" alt="dios" class="redondo">  
                <h4>
                  RAM Vengance DDR4 16gb 3800mhz
                </h4>
                <h2>
                  ($120.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/gabinetes.jpeg" alt="dios" class="redondo">  
                <h4>
                  Gabinete Simple
                </h4>
                <h2>
                  ($420.000)
                </h2>
              </botton>
            </center>
          </div>
          <div class="carrusel2">
            <center class="cen">
              <botton class="boto" href="Peri.html">    
                <img src="img/gabineter.jpeg" alt="dios" class="redondo">  
                <h4>
                  Gabinete RGB
                </h4>
                <h2>
                  ($847.000)
                </h2>
              </botton>
            </center>
          </div>
          </div>

        </div>
      </div>
      <div class="botonis2">
        <button class="carrusel-arrow2 .activo">
        </button>
        <button class="carrusel-arrow2">
        </button>
        <button class="carrusel-arrow2">
        </button>
      </div>
        ///////////////////////////////////////////////////////////////////
        <section class="txt-header" id="software">
          <center>
            <h1>
              Software
            </h1>
          </center>
        </section>
        <div class="carruselCont0">
          <div class="carruselList0">
  
            <div class="track0">
            <div class="carrusel0">
              <center class="cen">
                <botton class="boto" href="Peri.html">    
                  <img src="img/w11.jpeg" alt="dios" class="redondo">  
                  <h4>
                    Windows 11
                  </h4>
                  <h2>
                    ($11.000)
                  </h2>
                </botton>
              </center>
            </div>
            <div class="carrusel0">
              <center class="cen">
                <botton class="boto" href="Peri.html">    
                  <img src="img/w10.png" alt="dios" class="redondo">  
                  <h4>
                    Windows 10
                  </h4>
                  <h2>
                    ($10.000)
                  </h2>
                </botton>
              </center>
            </div>
            <div class="carrusel0">
              <center class="cen">
                <botton class="boto" href="Peri.html">    
                  <img src="img/linux.jpeg" alt="dios" class="redondo">  
                  <h4>
                    Linux
                  </h4>
                  <h2>
                    ($7.000)
                  </h2>
                </botton>
              </center>
            </div>
            </div>
          </div>
        </div>
        <div class="botonis0">
          <button class="carrusel-arrow0">
          </button>
        </div>
        ///////////////////////////////////////////////////////////////////

        <section class="txt-header" id="memes">
          <center>
            <h1>
              Memes
            </h1>
          </center>
        </section>
        <center>
          <div class="Somos">
            <h1>Si lo que buscas es divertirte, o simplemente pasar el rato</h1>
            <br>
            <h2>¡No dudes en seguirnos en nuestras redes sociales!</h2>
            <br><br>
            <br><br>
            <br>
            <center class="cen">
            <ul>
              <li>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa-brands fa-instagram" aria-hidden="true"></span>
                </a>
            </li>
              <li>
                  <a href="#">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span class="fa-brands fa-twitter" aria-hidden="true"></span>
                  </a>
              </li>
              <br><br>
              <li>
                  <a href="#">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span class="fa-brands fa-youtube" aria-hidden="true"></span>
                  </a>
              </li>
              <br><br>

            </ul>
            </center>
          <br><br>
            <h1>Conectando pasiones, potenciando tecnología.</h1>
            <br><br>
          </div>
        </center>


        

      </div>
        



      

        <div id="button-up">
        <i class="fa-solid fa-arrow-up"></i>
        </div>
        
        <footer>
          <div class="footer-bottom">
          <p>Informacion General</p>
          </div>
          <div class="footer-content">
        <div class="footer-section">
            <br>
             <h3>Sobre Nosotros</h3>
            <br>
            <p>Somos Techno-RBSC una empresa dedicada a ofrecer el mejor servicio en tecnologia y electronica. </p>
            <br>
            <h3>Nuestro Eslogan</h3>
            <br>
            <p>Conectando pasiones, potenciando tecnología.</p>
            <br>
        </div>
        <div class="footer-section">
            <br>
              <h3>Enlaces Rápidos</h3>
            <br>
             <p><a href="inicio.php">Inicio</a></p>
            <br>
              <p><a href="#">Ayuda</a></p>
            <br>
              <p><a href="#">Donaciones</a></p>
            <br>
        </div>
        <div class="footer-section">
            <br>
              <h3>Contáctanos</h3>
            <br>
              <p>E-Mail: <i class="fa-solid fa-square-envelope"></i> Cimientosrbsc@gmail.com</p>
            <br>
             <p>Telefono: <i class="fa-solid fa-phone-flip"></i>
              <br>
              +54 9 2246 411641</p>
            <br>
        </div>
        <div class="footer-section">
          <br>
          <h3>Síguenos</h3>
          <br>
          <p><a href="https://www.instagram.com/techno_rbsc/">Instagram: <i class="fa-brands fa-instagram"> </i></a></p>
          <br>
          <p><a href="https://x.com/TechnoRBSC">Twitter: <i class="fa-brands fa-twitter"></i></a></p>
          <br>
          <p><a href="#">Youtube: <i class="fa-brands fa-youtube"></i></a></p>
          <br>
        </div>
          </div>
          <div class="footer-bottom">
          &copy; 2024 copyright. Todos los derechos reservados.
          </div>
        </footer>
        <script src="js/script.js"></script>

      </div>
    </body>
  </html>