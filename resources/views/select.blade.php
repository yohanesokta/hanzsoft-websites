@extends('components.front_store')

@section('customStyle')
<link rel="stylesheet" href="/res/css/select.css">
@endsection
@section('content')
    <div class="isi-data">
        <div class="isi-data-katalog">
            <img src="{{$data->icon}}" alt="">
            <div class="katalog-info">
                <p>{{$data->nama}}</p>
                <span>{{$data->ver}}</span>
            </div>
        </div>

        <div class="data-download">
            <i class="fa-solid fa-circle-down"></i>
           <a href="{{$data->download}}" target="_blank">Download</a>
        </div>
    </div>
    <div class="info">
        <img src="{{$data->prev}}" alt="preview image">
        <p>{{$data->description}}</p>
    </div>

@include('components.footer')
@endsection
