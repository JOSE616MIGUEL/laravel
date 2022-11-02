@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar cliente</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="">
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
                <button class="btn btn-primary">Actualizar</button>
            </form>
        </p>
    </div>
</div>
@endsection