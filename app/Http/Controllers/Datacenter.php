<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class Datacenter extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request){
        $API_URL = env('API_URL');
        // find or not

        $find = $request->s ?? false;
        if (!$find){

            $data = Http::get($API_URL)->object();
            return view('store',[
                'data' => $data->software,
                'category'=>$data->kategori,
                'req'=>$request,
                'notap'=>true
            ]);
        }else{

            $data = Http::get($API_URL.'?action=find&find='.$request->s)->object();
            return view('search',[
                'data'=> $data->data,
                'req'=>$request
            ]);
        }


    }

    public function select($id){
        $API_URL = env('API_URL');
        $data = Http::get($API_URL.'?put='.$id)->object()->data[0];
        return view('select',[
            "data"=>$data,
            "tutor"=> Str::markdown($data->req)
        ]);
    }
}