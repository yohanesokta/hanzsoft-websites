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

        <a class="data-download" href="{{$data->download}}" target="_blank">
            <i class="fa-solid fa-circle-down"></i>
           <p>Download</p>
        </a>
    </div>
    <div class="get-info">
        <div class="info">
            <img src="{{$data->prev}}" alt="preview image">
            <p>{{$data->description}}</p>
        </div>
        <div class="iklan">
            <div class="isi-iklan">
                <script type="text/javascript">
                    atOptions = {
                        'key' : 'f5ff9da62cc95749274362b679014a19',
                        'format' : 'iframe',
                        'height' : 600,
                        'width' : 160,
                        'params' : {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="//www.profitablecreativeformat.com/f5ff9da62cc95749274362b679014a19/invoke.js"></scr' + 'ipt>');
                </script>
            </div>
        </div>
    </div>

@include('components.footer')
@endsection
