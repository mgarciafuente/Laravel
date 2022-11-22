<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;

class DirectionController extends Controller
{

    public function index()
    {
        return view('insert-direction');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
