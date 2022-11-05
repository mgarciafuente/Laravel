<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowMountains2 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $mountains = DB::table('mountains')
            ->where('height', '<', 1500)
            ->orWhere('belongsToRange', false)
            //->where('name', 'like', "['A','E','I','O','U']%")
            ->get();
    }
}
