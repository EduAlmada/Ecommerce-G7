@extends('layouts.plantillaAdministradores')

    @section('title', 'Panel de Usuarios')


    @section('main')

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

  @endsection