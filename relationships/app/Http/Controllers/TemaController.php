<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemaController extends Controller
{
    public function index()
    {
        $temas = Tema::all();
        return view('tema.temas', ['temas' => $temas]);
    }

    public function insert()
    {
        return view('tema.insert-tema');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $name = $request->name;

        Tema::create(['name' => $name]);
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Tema::destroy($id);
        return redirect()->route('home');
    }
}
