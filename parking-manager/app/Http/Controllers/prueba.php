<?php

namespace App\Http\Controllers;
use App\Models\Parking;
use Illuminate\Http\Request;

class prueba extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $parkings = Parking::all();
        return view('index')->with(['parkings' => $parkings]);
    }
}
