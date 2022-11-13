<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{

    public function index()
    {
        $cars = DB::table('cars')->get();
        return view('home')->with(['cars' => $cars]);
    }

    public function new()
    {
        return view('new');
    }

    public function search()
    {
        return view('search');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'plate' => 'required|min:5',
            'brand' => 'required',
            'model' => 'required',
        ]
    );
        $plate = $request->plate;
        $brand = $request->brand;
        $model = $request->model;
        DB::table('cars')->insert([
            'plate' => $plate,
            'brand' => $brand,
            'model' => $model
        ]);
        return redirect(route('home'));
    }

    public function show(Request $request)
    {
        $this->validate($request, 
            [
                'search' => 'required',
            ]
        );

        $search = $request->search;
        $cars = DB::table('cars')
            ->where('plate', 'like', "%$search%")->get();
        ;
        return view('index', ['cars' => $cars]);
    }

    public function delete($id)
    {
        Car::destroy($id);
        return redirect(route('home'));
    }
}
