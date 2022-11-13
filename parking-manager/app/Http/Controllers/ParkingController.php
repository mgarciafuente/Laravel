<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $parkings = DB::table('parkings')->get();
        return view('current')->with(['parkings' => $parkings]);
    }

    public function search()
    {
        return view('search');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "plate" => "required|min:1",
            "brand" => "required|min:1",
            "model" => "required|min:1",
        ],
        [
            'plate.required'=> 'A plate is required. ', // custom message
            'brand.required'=> 'A brand is required. ',
            'model.required'=> 'A model is required. ', 
         ]);
        $plate = $request->input('plate');  
        $brand = $request->input('brand');  
        $model = $request->input('model');  
        Parking::create(['plate' => $plate, 'brand' => $brand, 'model' => $model]);
        return redirect(route('index'));
    }

    public function show(Request $request)
    {
        $this->validate($request, [
            "search" => "required|min:1",
        ],
        [
            'search.required'=> 'Write something...', // custom message
         ]);
        $search = $request->input('search');
        $parkings = DB::table('parkings')
            ->where('plate', 'LIKE', "%$search%")
            ->orWhere('brand', 'LIKE', "%$search%")
            ->orWhere('model', 'LIKE', "%$search%")
            ->get();
        return view('show-search')->with(['parkings' => $parkings]);
    }

    public function destroy($id)
    {
        Parking::destroy($id);
        return redirect(route('index'));
    }
}
