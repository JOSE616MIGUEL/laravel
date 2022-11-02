@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar cliente</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estás seguro de eliminar este registro?

            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Ape. Paterno</th>
                    <th>Ape. Materno</th>
                    <th>Edad</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="">
                <a href="{{ route('Cliente.index') }}" class="btn btn-info">Volver</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        </p>
    </div>
</div>
@endsection