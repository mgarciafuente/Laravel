<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Parking;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{

    public function newUser()
    {
        return view('new-user');
    }

    public function assignUser()
    {
        $cars = Parking::all();
        $users = User::all();
        return view('assign-user', ['cars' => $cars, 'users' => $users]);
    }

    public function storeUser(StoreUser $request)
    {
        $validated = $request->validated();

        $name = $validated['name'];
        $lastname = $validated['lastname'];
        $email = $validated['email'];

        User::create(['name' => $name, 'lastname' => $lastname, 'email' => $email]);

        return redirect(route('index'));
    }
}
