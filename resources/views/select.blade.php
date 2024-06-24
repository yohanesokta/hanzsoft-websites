@extends('components.navigation')

@section('customStyle')
<link rel="stylesheet" href="/res/css/select.css">
@endsection
@section('content')
    <div class="isi-data">
        <div class="isi-data-katalog">
            <img src="{{$data[0]->icon}}" alt="">
            <div class="katalog-info">
                <p>{{$data[0]->nama}}</p>
                <span>{{$data[0]->ver}}</span>
            </div>
        </div>

        <div class="data-download">
            <i class="fa-solid fa-circle-down"></i>
           <a href="{{$data[0]->download}}" target="_blank">Download</a>
        </div>
    </div>
    <div class="info">
        <img src="{{$data[0]->prev}}" alt="preview image">
        <p>{{$data[0]->description}}</p>
    </div>

@include('components.footer')
@endsection
