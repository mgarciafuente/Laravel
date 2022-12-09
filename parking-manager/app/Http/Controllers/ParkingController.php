<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use App\Models\User;
use App\Http\Requests\StoreParking;
use App\Http\Requests\StoreParking2;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ParkingController extends Controller
{
    public function index()
    {
        return view('home')->with(['menu' => 'no']);
    }

    public function new()
    {
        return view('new')->with(['users' => User::all()]);;
    }
    
    public function current()
    {
        $parkings = Parking::all();
        return view('current')->with(['parkings' => $parkings]);
    }

    public function search()
    {
        return view('search')->with(['users' => User::all()]);
    }

    public function store(StoreParking $request)
    {
        $validated = $request->validated();

        $plate = $validated['plate'];  
        $brand = $validated['brand'];  
        $model = $validated['model'];
        
        $parking = Parking::create(['plate' => $plate, 'brand' => $brand, 'model' => $model]);

        $userId = $validated['user'];
        $user = User::findOrFail($userId);
        $user->parkings()->save($parking);

        return redirect(route('index'));
    }

    public function store2(StoreParking2 $request)
    {
        $validated = $request->validated();

        $plate = $validated['plate'];  
        $brand = $validated['brand'];  
        $model = $validated['model'];
        
        $parking = Parking::create(['plate' => $plate, 'brand' => $brand, 'model' => $model]);

        $name = $validated['name'];  
        $lastname = $validated['lastname'];  
        $email = $validated['email'];

        $user = User::create(['name' => $name, 'lastname' => $lastname, 'email' => $email]);
        $user->parkings()->save($parking);

        return redirect(route('index'));
    }

    public function show(Request $request)
    {
        $search = $request->input('search');
        $date = $request->input('date');
        $userId = $request->input('user');

        $parkings = Parking::where('id', '>', 0);
        
        if(isset($date)) {
            $parkings->whereDate('created_at', '=', $date);
        }        
        if(isset($userId)) {
            $parkings->where('user_id', $userId);
        }
        if(isset($search)) {
            $parkings->where(function($query) use ($search){
                $query->where('plate', 'LIKE', "%$search%")
                    ->orWhere('brand', 'LIKE', "%$search%")
                    ->orWhere('model', 'LIKE', "%$search%");
            });
        }

        $parkings = $parkings->get();

        return view('show-search')->with(['parkings' => $parkings]);
    }

    public function storeAssigment(Request $request)
    {
        $carId = $request->input('car');
        $userId = $request->input('user');

        Parking::where('id', $carId)->update(['user_id' => $userId]);

        return redirect(route('index'));
    }

    public function destroy($id)
    {
        Parking::destroy($id);
        return redirect(route('index'));
    }
}
