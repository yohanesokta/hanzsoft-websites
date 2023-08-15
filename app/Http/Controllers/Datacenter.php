<?php

namespace App\Http\Controllers;

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
        return view('store',[
            'title' => 'Corel AI'
        ]);
    }
}
