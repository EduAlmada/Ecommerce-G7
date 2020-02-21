<!DOCTYPE html>
<html lang="en">
 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-commerce Grupo 7</title>
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fuente para el proyecto Ecommerce Digital House-->
   <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
   

   <!-- CSS personalizado de cada formulario -->
 <!--<link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/login.css"> -->
</head>

<body>
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





<!-- INICIO SLIDER -->
<div class="navspacer p-4"></div> <!-- Separador para que no tape el fixed-top -->
<!--carrusel-->
<div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Camperas1b.jpg" class="d-block w-100" alt="first slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sacos de calidad</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Camperas2b.jpg" class="d-block w-100" alt="second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sobretodos</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Camperas3b.jpg" class="d-block w-100" alt="third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<!--segundo navbar para las categorías-->
<main>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light mdb-color lighten-3 mt-3 mb-5">
        <span class="navbar-brand">Categorías de Productos:</span>
        <!-- botón hamburguesa en collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- los links de las categorías -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Sacos
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Blazers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Chalecos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Varios</a>
                </li>
            </ul>
            <!-- boton para buscar-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
<!-- FIN SLIDER -->









 <!-- INICIO SECCIÓN DE PRODUCTOS -->
       <!-- mb : margin bottom 4 = 1,5rem -->
       <section class="text-center mb-4">
        <div class="row">
        <!-- grid responsive. 3 col en large de 993px, 4 col en medium de 768px,  -->
        <article class="col-lg-3 col-md-6 mb-4">
            <!-- primer artículo -->
            <div class="card">
                <img src="img/Camperas1.jpg" class="card-img-top" alt="">
            <!--textos del artículo-->
            <div class="card-body text-center">
                <a href="Producto.html" class="grey-text">
                <h5>Saco1</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle de saco1
                    <span class="badge badge-pill danger-color">Nuevo</span>
                    </a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$920</strong>
                </h4>
            </div>
            </div>
        </article> 
        <!--grid responsive-->
        <article class="col-lg-3 col-md-6 mb-4">
            <!-- segundo artículo-->
            <div class="card">
                <img src="img/Camperas2b.jpg" class="card-img-top" alt="">
            <!--textos segundo artículo-->
            <div class="card-body text-center">
                <a href="Producto.html" class="grey-text">
                <h5>Saco2</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle de saco2</a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$950</strong>
                </h4>
            </div>
            </div>
        </article>
        <!--grid responsive-->
        <article class="col-lg-3 col-md-6 mb-4">
            <!--tercer artículo-->
            <div class="card">
                <img src="img/Camperas3b.jpg" class="card-img-top" alt="">
            <!--textos tercer artículo-->
            <div class="card-body text-center">
                <a href="Producto.html" class="grey-text">
                <h5>Saco3</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle saco3
                    <span class="badge badge-pill primary-color">Exclusivo!</span>
                    </a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$900</strong>
                </h4>
            </div>
            </div>
        </article>
        <!--grid responsive-->
        <div class="col-lg-3 col-md-6 mb-4">
            <!-- cuarto artículo -->
            <div class="card">
                <img src="img/Camperas4.jpg" class="card-img-top" alt="">
            <!-- textos cuarto artículo -->
            <div class="card-body text-center">
                <a href="Producto.html" class="grey-text">
                <h5>Saco4</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle saco4</a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$1.150$</strong>
                </h4>
            </div>
            </div>
        </div>
        </div>
        <!-- cierro el class row y abro otro-->
        <div class="row">
        <!-- grid responsive-->
        <div class="col-lg-3 col-md-6 mb-4">
            <!-- quinto artículo -->
            <div class="card">
                <img src="img/Camperas5.jpg" class="card-img-top" alt="">
            <!-- textos quinto artículo -->
            <div class="card-body text-center">
                <a href="Producto.html" class="grey-text">
                <h5>Saco5</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle Saco5
                    <span class="badge badge-pill danger-color">Nuevo</span>
                    </a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$1.200</strong>
                </h4>
            </div>
            </div>
        </div>
        <!-- grid responsive -->
        <div class="col-lg-3 col-md-6 mb-4">
            <!-- sexto artículo -->
            <div class="card">
                <img src="img/Camperas5.jpg" class="card-img-top" alt="">
            <!-- detalle sexto artículo -->
            <div class="card-body text-center">
                <!--Category & Title-->
                <a href="Producto.html" class="grey-text">
                <h5>Saco6</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle saco6</a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$1.430</strong>
                </h4>
            </div>
            </div>
        </div>
        <!-- grid responsive -->
        <div class="col-lg-3 col-md-6 mb-4">
            <!-- séptimo artículo -->
            <div class="card">
                <img src="img/Camperas5.jpg" class="card-img-top" alt="">
            <!-- detalle septimo artíoculo-->
            <div class="card-body text-center">
                <!--Category & Title-->
                <a href="Producto.html" class="grey-text">
                <h5>Saco7</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle saco7
                    <span class="badge badge-pill primary-color">Exclusivo</span>
                    </a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$1.700</strong>
                </h4>
            </div>
            </div>
         </div>
         <!-- grid responsive -->
        <div class="col-lg-3 col-md-6 mb-4">
            <!-- octavo artículo -->
            <div class="card">
                <img src="img/Camperas5.jpg" class="card-img-top" alt="">
            <!-- detalle octavo artículo -->
            <div class="card-body text-center">
                <a href="Producto.html" class="grey-text">
                <h5>Saco8</h5>
                </a>
                <h5>
                <strong>
                    <a href="Producto.html" class="dark-grey-text">Detalle saco8</a>
                </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                <strong>$2.180</strong>
                </h4>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- paginación -->
    <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">
        <!--flecha a la izquierda -->
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Atrás</span>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">1
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
         <!--flecha a la derecha -->
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
        </li>
        </ul>
    </nav>
    </div>
    <!-- cierro el container de sección artículos -->
</main>
 <!-- FIN SECCIÓN DE PRODUCTOS -->





















<!-- INICIO FOOTER -->
<footer class="page-footer text-center font-small mt-5 bg-dark">

    <div class="pt-4">
        <a class="btn-outline-light pl-3 pr-3" href="index.php" target="_self" role="button">Home</a>
        <a class="btn-outline-light pl-3 pr-3" href="index.php" target="_self" role="button">Sobre Nosotros</a>
        <a class="btn-outline-light pl-3 pr-3" href="perfil.php" target="_self" role="button">Perfil</a>
        <a class="btn-outline-light pl-3 pr-3" href="faq.php" target="_self" role="button">Preguntas frecuentes</a>
        <a class="btn-outline-light pl-3 pr-3" href="registro.php" target="_self" role="button">Registrarse</a>
        <a class="btn-outline-light pl-3 pr-3" href="login.php" target="_self" role="button">Login</a>
        <a class="btn-outline-light pl-3 pr-3" href="formularioContacto.php" target="_self" role="button">Contacto</a>
    </div>
  
    <div class="p-4">
        <a href="https://www.facebook.com" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="https://twitter.com" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>
        <a href="https://plus.google.com" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
        </a>
    </div>

</footer>
<!-- FIN FOOTER -->




<?php //include("scripts.php"); ?>
<!-- script jquery, popper y bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



   
</body>

     </html>