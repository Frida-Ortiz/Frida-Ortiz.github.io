<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emprende Tec</title>
    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <php>
    <header class="header">
      <div class="menu container">
        
      <a href="index.php">
        <img src="imagenes/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
    </a>
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="imagenes/menu.png" class="menu-icono" alt="menu" />
        </label>
        <nav class="navbar">
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="form.html">Inscribete</a></li>
            <li><a href="retro.html">Criterios de presentacion del proyecto</a></li>
          </ul>
        </nav>
      </div>

      <div class="header-content container">
        <div class="header-txt">
          <h1>EMPRENDE TEC</h1>
          <p>
            TECNOLÓGICO NACIONAL DE MÉXICO CAMPUS QUERÉTARO
            <br>
            <br>
              DEPARTAMENTO DE CIENCIAS ECONÓMICO ADMINISTRATIVAS PROGRAMA EDUCATIVO DE INGENIERÍA EN GESTIÓN EMPRESARIAL

<br>
<br>
    CONVOCA
    <br>
A todos los alumnos del Instituto Tecnológico de Querétaro interesados en el desarrollo y presentación
de proyectos de emprendimiento y/o innovación tecnológica o social, a participar en la:
VII EXPOSICIÓN DE PROYECTOS DE EMPRENDIMIENTO E INNOVACIÓN
"EMPRENDETEQ"
a realizarse el día 28 de noviembre 2023 de 8.30 a 12.30 hrs. en las instalaciones del mismo Instituto.
          </p>
          <a href="retro2.html" class="btn-1">Retroalimentacion
        </a>
        </div>
        <div class="header-img">
            <img src="imagenes/left33.png" alt="" >

        </div>
      </div>
    </header>

    <section class="about container">
        <div class="about-img">
            <img src="imagenes/about.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Dicho evento, tiene la finalidad de generar un espacio para reunir talentos, ideas y creatividad entre los
participantes para promover proyectos que cubren un amplio espectro de negocios, con organismos
empresariales, públicos y privados, autoridades y a los mismos alumnos con la capacidad de aportar
nuevos conocimientos, ideas, productos, servicios y sistemas de vanguardia para satisfacer las
necesidades de la población local, regional y nacional, incrementando el interés para la creación de
nuevas empresas o modelos de negocio innovadores así como comercialización de productos y/o
servicios.

            </p>
            <br>
            <h2>MISIÓN:</h2>
            <p>
                
Ser el vínculo de acercamiento entre el espíritu empresarial de los alumnos y las autoridades, revisores
externos e inversionistas para promover el ambiente ideal para la materialización de las ideas, a través
de asesorías y evaluación de los proyectos, así como comercialización.
            </p>

        </div>
    </section>
    <main class="servicios">
        <h2>Toma en cuenta</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-solid fa-puzzle-piece"></i>
                <li><a href="obj.html" style="color: black; font-weight: bold;">OBJETIVO</a></li>

            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-people-roof"></i>
                <li><a href="bases.html" style="color: black; font-weight: bold;">BASES DE PARTICIPACION</a></li>

            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-file-lines"></i>
                 <li><a href="cat.html" style="color: black; font-weight: bold;">CATEGORIAS</a></li>
            </div>
            
        </div>
    </main>
   

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="index.php">
                    <img src="imagenes/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                </a>
               
            </div>
            <div class="link">
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="form.html">Inscribete</a></li>
                     <li><a href="retro.html">Criterios de presentacion del proyecto</a></li>
                </ul>
            </div>
        </div>

    </footer>

    <?php
         include("send.php");
    ?>
    <script>
        function myFunction(){
            window.location.href="http://localhost/pagina"
        }
    </script>


  </body>
</html>
