@extends('layouts/plantillaAdministradores')

    @section('title', 'Alta de una nueva Marca')


    @section('main')

        @section('h1', 'Alta de un nuevo producto')

        <div class="card bg-light col-md-7 mt-5 p-3 mx-auto">
        <form action="/agregarProducto" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label for="prdNombre">Nombre del Producto:</label>
            <input type="text" class="form-control" name="prdNombre"  value="{{ old('prdNombre') }}" id="prdNombre" placeholder="nombre del Producto" required>
        </div>    
        <div class="form-group">
            <label for="prdPrecio">Precio:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" name="prdPrecio" value="{{ old('prdPrecio') }}" class="form-control" id="prdPrecio" placeholder="0" min="0" step="0" required>
            </div>
        </div>
    @endsection
