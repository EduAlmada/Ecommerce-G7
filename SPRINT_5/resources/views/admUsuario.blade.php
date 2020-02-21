<!DOCTYPE html>
<html lang="es">
 

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













<!-- INICIO CONTAINER -->
<div class="container mt-5">
    <!--INICIO DE TABLA ADMINISTRACION DE USUARIO -->
<table class="table table-hover table-striped table-responsive-md">
    <thead class="table-primary">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">USUARIO</th>
        <th scope="col">DIRECCION</th>
        <th scope="col">TELEFONO</th>
        <th scope="col">EMAIL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Homero</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Simpson</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Larry</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Larry</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  
  <!-- FIN DE TABLA ADMINISTRACION DE USUARIO -->
</div>
<!-- FIN CONTAINER -->









<!-- script jquery, popper y bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</body>
</html>