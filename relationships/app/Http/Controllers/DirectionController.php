<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Usuario;

class DirectionController extends Controller
{

    public function index()
    {
        return view('direction.directions', ['directions' => Direction::all()]);
    }

    public function insert()
    {
        return view('direction.insert-direction');
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

    public function edit(Direction $direction)
    {
        return view('direction.edit-direction', ['direction' => $direction]);
    }

    public function update(Request $request, Direction $direction)
    {
        $this->validate($request, [
            'street' => 'required',
            'number' => 'required',
            'postal_code' => 'required',
            'city' => 'required'
        ]);

        $street = $request->street;
        $number = $request->number;
        $postal_code = $request->postal_code;
        $city = $request->city;

        $direction->update(['street' => $street, 'number' => $number, 'postal_code' => $postal_code, 'city' => $city]);
        
        return redirect(route('home'));
    }

    public function assign()
    {
        $assignedUsers = Direction::where('usuario_id' ,'>' ,0)->get('usuario_id');
        $usuarios = Usuario::whereNotIn('id', $assignedUsers)->get();
        $directions = Direction::all();

        return view('direction.assign-direction', ['usuarios' => $usuarios, 'directions' => $directions]);
    }

    public function storeAssigment(Request $request)
    {
        $usuario = Usuario::findOrFail($request->input('usuario_id'));
        $direction = Direction::findOrFail($request->input('direction_id'));

        $usuario->direction()->save($direction);

        return redirect(route('home'));
    }

    public function destroy($id) {
        
        Direction::destroy($id);
        return redirect(route('home'));
    }
}
