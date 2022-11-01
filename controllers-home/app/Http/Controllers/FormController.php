<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function ageAnonymous()
    {
        return view('age')->with(['name' => 'Anonymous', 'lastname' => 'user']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ageRequest(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:1",
            "lastname" => "required|min:1"
        ]);
        
        $name = $request->input('name');
        $lastname = $request->input('lastname');

        return view('age')->with(['name' => $name, 'lastname' => $lastname]);
    }

    public function main(Request $request)
    {
        $this->validate($request, [
            "age" => "required|numeric|min:18",
        ]);

        $age = $request->input('age');
        $name = $request->input('name');
        $lastname = $request->input('lastname');

        return view('main')->with(['age' => $age, 'name' => $name, 'lastname' => $lastname]);
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
