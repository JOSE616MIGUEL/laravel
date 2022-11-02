<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
        $datos = Cliente::all();
        return view('inicio', compact('datos')); 
    }

    public function create()
    {
        //formulario para agregar los datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //guarda los datos en la base de datos
        $cliente = new Cliente();
        $cliente->nombre = $request->post('nombre');
        $cliente->apePaterno = $request->post('apePaterno');
        $cliente->apeMaterno = $request->post('apeMaterno');
        $cliente->edad = $request->post('edad');
        $cliente->save();

        return redirect()->route("Cliente.index")->with("success", "Agregado con exito!");
    }

    public function show()
    {
        //obtiene los registro de la tabla
        return view('eliminar');
    }

    public function edit()
    {
        //metodo para traer los datos se van editar
        return view("actualizar");
    }

    public function update(Request $request, $id)
    {
        //actualiza los datos en la base de datos
    }

    public function destroy($id)
    {
        //elimina el registro
    }
}
