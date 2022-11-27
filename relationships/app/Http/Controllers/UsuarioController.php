<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        return view('usuario.usuarios', ['usuarios' => Usuario::all()]);
    }


    public function insert()
    {
        return view('usuario.insert-usuario');
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
        return view('usuario.edit-usuario', ['usuario' => $usuario]);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
        ]);

        $name = $request->input('name');
        $surname = $request->input('surname');

        // receiving id instead of object
        // $usuario = Usuario::find($id);
        // $usuario->name = $name;
        // $usuario->surname = $surname;
        // $usuario->save();
        // or
        // Usuario::where('id', $id)->update(['name' => $name, 'surname' => $surname]);

        $usuario->update(['name' => $name, 'surname' => $surname]);

        return redirect(route('home'));
    }

    public function destroy($id) {
        
        Usuario::destroy($id);
        return redirect(route('home'));
    }
}
