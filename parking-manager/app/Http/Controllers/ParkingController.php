<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use App\Models\User;
use App\Http\Requests\StoreParking;
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
        return view('new');
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
        
        Parking::create(['plate' => $plate, 'brand' => $brand, 'model' => $model]);
        return redirect(route('index'));
    }

    public function show(Request $request)
    {
        $search = $request->input('search');
        $date = $request->input('date');
        $parkings = Parking::whereDate('created_at', '=', $date)
            ->where('plate', 'LIKE', "%$search%")
            ->orWhere('brand', 'LIKE', "%$search%")
            ->orWhere('model', 'LIKE', "%$search%")
            ->get();
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
