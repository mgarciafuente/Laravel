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
        $vowels = ['A', 'E', 'I', 'O', 'U'];
        $mountains = DB::table('mountains')
            ->where('height', '>', 1500);
            //->where('belongsToRange', false)
        for($i=0; $i<count($vowels); $i++) {
            if($i==0) {
                $mountains->where('name', 'like', $vowels[$i].'%');
            } else {
                $mountains->orWhere('name', 'like', $vowels[$i].'%');
            }       
        }
        $mountains = $mountains->get();
        return view('home', ['mountains' => $mountains]);
    }
}
