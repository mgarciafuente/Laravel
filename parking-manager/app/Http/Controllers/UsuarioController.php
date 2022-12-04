<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function newUser()
    {
        return view('new-user');
    }

    public function assignUser()
    {
        $cars = DB::table('parkings')->get();
        $users = DB::table('users')->get();
        return view('assign-user', ['cars' => $cars, 'users' => $users]);
    }

    public function storeUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',            
        ]);

        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');

        Usuario::create(['name' => $name, 'lastname' => $lastname, 'email' => $email]);

        return redirect(route('index'));
    }
}
