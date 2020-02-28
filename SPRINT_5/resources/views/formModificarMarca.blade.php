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































<div class="alert bg-light p-4">
    <form action="/modificarMarca" method="post">
        @csrf
        Nombre:
        <br>
        <input type="text" name="mkNombre" value="{{ $marca->mkNombre }}" class="form-control">
        <input type="hidden" name="idMarca" value="{{ $marca->idMarca }}">
        <br>
        <button class="btn btn-dark">Agregar</button>

    </form>
</div>








<!-- script jquery, popper y bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</body>
</html>