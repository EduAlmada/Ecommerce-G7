@extends('layouts.plantillaAdministradores')

    @section('title', 'Panel de Productos')

    @section('h1', 'Panel de Productos')

    @section('main')

        <table class="table table-hover table-striped table-border">
            <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Color</th>
                <th>Talle</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="/formAgregarProducto" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td>{{ $producto->prdNombre }}</td>
                <td>{{ $producto->prdPrecio }}</td>
                <td>{{ $producto->marca }}</td>
                <td>{{ $producto->categoria }}</td>
                <td>{{ $producto->color }}</td>
                <td>{{ $producto->talle }}</td>
                <td><img src="{{ asset('images/productos') }}/{{ $producto->prdImagen }}" class="img-thumbnail"></td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>

    @endsection
