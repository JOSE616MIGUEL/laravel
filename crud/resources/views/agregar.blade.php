@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agrega nuevo cliente</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('Cliente.store') }}" method="POST">
                @csrf
                <!-- name debe ser igual a los campos de la tabla de la base de datos-->
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Ape. Paterno</label>
                <input type="text" name="apePaterno" class="form-control" required>
                <label for="">Ape. Materno</label>
                <input type="text" name="apeMaterno" class="form-control" required>
                <label for="">Edad</label>
                <input type="number" name="edad" class="form-control" required>
                <br>
                <a href="{{ route("Cliente.index") }}" class="btn btn-info">Volver</a>
                <button class="btn btn-primary">Agregar</button>
            </form>
        </p>
    </div>
</div>
@endsection