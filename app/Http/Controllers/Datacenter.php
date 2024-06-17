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

            $items = DB::table('items')->get();
            $kategori = DB::table('kategori')->get();
            return view('store',[
                'data' => $items,
                'category'=>$kategori,
                'req'=>$request,
                'notap'=>true
            ]);
        }else{

            $data = DB::table('items')->where('nama_query','like','%'.$request->s.'%')->get();


            if(count($data) > 0) {
                return view('search',[
                    'data'=> $data,
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
        $item_name = urldecode($id);
        $data = DB::table('items')->where('nama',$item_name)->get();
        return view('select',[
            "data"=> $data
        ]);
    }
}
