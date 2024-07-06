@extends('components.navigation')

@section('customStyle')
    <link rel="stylesheet" href="/res/css/2462024/finder.css">
@endsection

@section('content')
    @if (count($data) > 0)
        <div class="container-find">
            @foreach ($data as $Data)
                    <a href={{ '/Store/'. urlencode($Data->nama)  }} class="special">
                        <img src={{ $Data->prev }} alt="">
                        <div class="container-desc">
                            <div class="desc">
                                <div class="icon">
                                    <img src={{ $Data->icon }} alt="">
                                </div>
                                <div class="txt">
                                    <h1>{{ $Data->nama }}</h1>
                                    <p>{{ $Data->ver  }}</p>
                                </div>
                            </div>
                            <div class="desc-long">
                                <p>{{ $Data->description }}</p>
                            </div>
                        </div>
                    </a>
            @endforeach
        </div>


    @else
        <p style="text-align:center; margin-top:20px">Data pencarian tidak ditemukan</p>
    @endif

@endsection
