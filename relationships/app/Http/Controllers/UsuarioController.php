<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        return view('insert-user');
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
}
