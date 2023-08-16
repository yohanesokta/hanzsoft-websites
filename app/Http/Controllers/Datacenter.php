<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Datacenter extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(){

        $var = DB::table('Software')->get();
        $cat = DB::table('Kategori')->get();
        return view('store',[
            'data' => $var,
            'category'=>$cat
        ]);
    }
}
