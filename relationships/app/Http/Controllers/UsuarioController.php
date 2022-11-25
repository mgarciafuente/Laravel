<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        return view('usuarios', ['usuarios' => Usuario::all()]);
    }


    public function insert()
    {
        return view('insert-usuario');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
        ]);

        $name = $request->input('name');
        $surname = $request->input('surname');

        Usuario::create(['name' => $name, 'surname' => $surname]);
        return redirect(route('home'));
    }


    public function edit(Usuario $usuario)
    {
        return view('edit-usuario', ['usuario' => $usuario]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
        ]);

        $name = $request->input('name');
        $surname = $request->input('surname');

        Usuario::create(['name' => $name, 'surname' => $surname]);
        return redirect(route('home'));
    }
}
