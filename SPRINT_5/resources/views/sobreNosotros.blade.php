@extends('layouts.plantillaInvitados')

    @section('title', 'sobreNosotros')

    

    @section('main')
  <!-- Inicio Navbar, fixed-top-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
          <!-- la marca del comercio-->
          <a class="navbar-brand" href="" target="_self">
              <strong class="blue-text">"Marca con Logo"</strong>
          </a>
          <!-- botón hamburguesa en collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- collapse -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- links de la izquierda -->
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php" target="_self">Sobre Nosotros</a>
              </li>

             <!-- Se saca perfil.php para que aparezca cuando se haga click en el usuario,
             a su vez USUARIO LOGUEADO  aparecerá en la deracha del NAV -->
             <!-- <li class="nav-item">
                      <a class="nav-link" href="perfil.php" target="_self">Perfil</a>
              </li> -->
              <li class="nav-item">
                  <a class="nav-link" href="faq.php" target="_self">Preguntas frecuentes</a>
              </li>

           <!--   <li class="nav-item">
                  <a class="nav-link" href="registro.php" target="_self">Registrarse</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="controladores/verificarIngresoLogin.php" target="_self">Login</a>
              </li> -->

              <li class="nav-item">
                  <a class="nav-link" href="formularioContacto.php" target="_self">Contacto</a>
              </li>
          </ul>
          <!-- links de la derecha -->
          <ul class="navbar-nav nav-flex-icons">

              <li class="nav-item">
                  <a href="https://www.facebook.com" class="nav-link" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="https://www.twitter.com" class="nav-link" target="_blank">
                  <i class="fab fa-twitter"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="https://www.instagram.com" class="nav-link" target="_blank">
                  <i class="fab fa-instagram"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link"  href="vistaCarritoCompras.php">

                  <i class="fas fa-shopping-cart" >4</i>
                 <!-- <span class="clearfix d-none d-sm-inline-block"> Carrito </span> -->
                  <!-- <span class="badge red z-depth-1 mr-1">1</span> -->
                  </a>
              </li>

          </ul>
      </div>
      </div>
  </nav> <!-- Fin Navbar, fixed-top-->





<div class="container">
  <h3>Camperas</h3><br>
  <p>
    Somos una marca Argentina de indumentaria fundada en el año 2019.<br>

    Nacimos en un pequeño local en una galería de Buenos Aires.<br>

    Desde nuestros inicios tuvimos un crecimiento constante y sostenido llegando a ser hoy una de las marcas más importantes en el mercado nacional.<br>

    Nuestro compromiso es ofrecer una gran variedad de prendas con una excelente relación diseño-precio-calidad.<br>

    Trabajamos para tener una constante renovación de productos, lo que nos ayuda a brindarle  una gran diversidad de prendas de moda para que pueda usar en diferentes momentos del día..<br>

  </p>

  <h3>Nuestros Locales</h3>
  <p>   ABASTO SHOPPING<br>
  4861-4968 / 4865-7113<br>
  ADROGUE BOULEVARD<br>
  Avenida Hipólito Yrigoyen 169<br>
  4239-1169/4214-4670
</p>


</div>



@endsection