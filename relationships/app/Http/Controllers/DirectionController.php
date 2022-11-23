<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Usuario;

class DirectionController extends Controller
{

    public function index()
    {
        return view('insert-direction');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'street' => 'required',
            'number' => 'required',
            'postal_code' => 'required',
            'city' => 'required'
        ]);

        $street = $request->input('street');
        $number = $request->input('number');
        $postal_code = $request->input('postal_code');
        $city = $request->input('city');

        Direction::create(['street' => $street, 'number' => $number, 'postal_code' => $postal_code, 'city' => $city]);

        return redirect(route('home'));
    }

    public function assign()
    {
        $usuarios = Usuario::all();
        $directions = Direction::all();

        return view('assign-direction', ['usuarios' => $usuarios, 'directions' => $directions]);
    }

    public function storeAssigment(Request $request)
    {
        $usuario = Usuario::findOrFail($request->input('usuario_id'));
        $direction = Direction::findOrFail($request->input('direction_id'));

        $usuario->direction()->save($direction);

        return redirect(route('home'));
    }
}
