@extends('layout/plantilla')

@section('titulopagina','Crud')

@section('contenido')
<div class="card">
    <div class="card-header text-center">
        CRUD con laravel 8 y mysql
    </div>
    <div class="card-body">
        <h5 class="card-title">Lista de clientes</h5>
        <div class="row">
            <div class="col-sm-12">
                @if($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
                @endif
            </div>
        </div>
        <p>
        <a href="{{ route('Cliente.create')}}" class="btn btn-primary">Agregar cliente</a>
        </p>
        <hr>
        <!--@php
            print_r($datos);
        @endphp -->
        <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Ape. Paterno</th>
                    <th>Ape. Materno</th>
                    <th>Edad</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <!-- para imprimir debe ser igual los nombre de los campos de la tabla -->
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apePaterno}}</td>
                        <td>{{$item->apeMaterno}}</td>
                        <td>{{$item->edad}}</td>
                        <td><a href="{{ route('Cliente.edit')}}">Editar</a></td>
                        <td><a href="{{ route('Cliente.show')}}">Eliminar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </p>
    </div>
</div>
@endsection