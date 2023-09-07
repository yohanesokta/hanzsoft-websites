<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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
        // $data = ["_id"=> "64f490c3c85850613f5c9d29",
        //     "nama"=> "Corel Draw",
        //     "nama_query"=> "corel draw",
        //     "kategori"=> "Desain",
        //     "description"=> "Corel Draw merupakan salah satu perangkat lunak desain grafis berbasis vektor. Perangkat lunak ini biasanya digunakan oleh seorang desainer grafis untuk mengerjakan pekerjaannya memproduksi berbagai hasil desain dengan basis vektor. Berdiri sejak tahun 1985, terhitung sudah lebih dari 90 juta pengguna menggunakan Corel Draw untuk memenuhi kebutuhan desainnya",
        //     "info"=> "populer editing vektor",
        //     "icon"=> "http://seeklogo.com/images/C/coreldraw-x7-logo-747B0DC253-seeklogo.com.png",
        //     "download"=> "http://od.meong.club/kuyc/campur/cdgx7.6.kuyhAa.Me.32.rar",
        //     "ver"=> "x7",
        //     "prev"=> "https://cybertwenty.com/wp-content/uploads/2018/04/crl-bsc0.jpg",
        //     "req"=> "WIndows 10 <br> 2gb of Ram"];

        return view('select',[
            "data"=>$data
        ]);
    }
}
