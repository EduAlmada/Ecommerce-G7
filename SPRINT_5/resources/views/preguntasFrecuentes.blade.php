@extends('layouts.plantillaInvitados')

    @section('title', 'preguntasFrecuentes')



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
    <div class="container mt-5 ">
<div class="navspacer p-4">
<h1>Preguntas Frecuentes</h1>
    <details>
        <summary>¿Cómo se realiza un pedido?</summary>
        <p>Para realizar un pedido de compra, es muy fácil, una vez en la página del producto deseado, tienes que: <br>
        <ul>
            <li>Hacer clic en "Añadir al carrito" y elegir la opción "Pagar Mi Pedido".</li>
            <li>En la página siguiente hacer clic en "Pagar".</li>
            <li>Si no tienes cuenta, elije la opción "Crea una cuenta" y rellena todos los datos, acepta los términos y condiciones y haz clic en "OK".</li>
            <li>En el paso siguiente, tienes que rellenar todos los datos restantes.</li>
            <li>Acepta los términos y condiciones y elije el medio de pago.</li>
            <li>Finalmente, recibirás un e-mail de confirmación de tu pedido.</li>
        </ul>
        </p>
    </details>
    <details>
        <summary>¿Cómo estoy seguro de que mi pedido ha sido recibido?</summary>
        <p>Te enviaremos un email de confirmación para validarlo. También podes ingresar en tu cuenta y revisar el estado de los pedidos.</p>
    </details>
    <details>
        <summary>¿Cómo sé cuál es el estado de mi pedido?</summary>
        <p>Al ingresar en tu cuenta podes visualizar tus pedidos, con la siguiente información:<br>
            - Número de pedido<br>
            - Fecha estimada de entrega<br>
            - Estado del envío:<br>
            <ul>
                - Pendiente <br>
                - En curso <br>
                - Enviado <br>
                - Entregado / Devuelto <br>
            </ul>
        </p>
    </details>
    <details>
        <summary>No tengo información actualizada del estado del pedido.</summary>
        <p>Puedes ponerte en contacto con nosotros a través del link de <a href="Index.html">Contacto</a><br>
            Es improtante que menciones el número de pedido y datos de usuario de la cuenta.</p>
    </details>
    <details>
        <summary>Olvidé mi contraseña, ¿cómo la recupero?</summary>
        <p>Tienes que ingresar nuevamente en Inicio y solicitar una nueva contraseña. La misma te llegará vía email registrado en la apertura de la cuenta.</p>
    </details>
    <details>
        <summary>¿Puedo cambiar la dirección de envío?</summary>
        <p>Si deseas cambiar la dirección de entrega antes de la expedición del pedido, ponte inmediatamente en contacto con nuestro servicio de atención al cliente o al link de <a href="Index.html">Contacto</a>. Si el pedido ha sido enviado antes del cambio de dirección, el cambio debe hacerse directamente poniéndose en contacto con el transportista.
        </p>
    </details>
</div>
</div>
<div class="container-fluid">
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
@endsection



















</div>
