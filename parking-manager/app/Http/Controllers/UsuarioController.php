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
            'dni' => 'required|size:9'
            
        ]);

        $name = $request->input('name');
        $dni = $request->input('dni');

        DB::table('users')->insert(['name' => $name, 'dni' => $dni]);

        return redirect(route('index'));
    }

    public function storeAssigment(Request $request)
    {

        $carId = $request->input('car');
        $userId = $request->input('user');

        DB::table('parkings')->where('id', $carId)->update(['userId' => $userId]);

        return redirect(route('index'));
    }
}
