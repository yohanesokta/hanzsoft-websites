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
                'data' => $data->response->data->items,
                'category'=>$data->response->data->kategori,
                'req'=>$request,
                'notap'=>true
            ]);
        }else{

            $data = Http::get($API_URL.'/find/'.$request->s)->object();
            $items = $data->response->data ?? null;
            if(!$items == null) {
                return view('search',[
                    'data'=> $data->response->data,
                    'req'=>$request,
                    'err'=>false
                ]);
            }else{
                return view('search',[
                    'err'=> true,
                    'req'=>$request
                ]);
            }
        }


    }

    public function select($id){
        $API_URL = env('API_URL');
        $data = Http::get($API_URL.'/put/'.urldecode($id))->object();
        return view('select',[
            "data"=> $data->response->data[0]
        ]);
    }
}
