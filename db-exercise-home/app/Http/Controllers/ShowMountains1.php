<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowMountains1 extends Controller
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
            ->where('belongsToRange', true)
            ->where('firstClimbDate', '>', '2000-01-01')
            ->where('continent', 'Europe')
            ->get();

            return view('showMountains1', ['mountains' => $mountains]);
    }
}
