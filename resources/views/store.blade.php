@extends('components.navigation')

@section('content')

@foreach ($category as $Cat)
<div class="item-box">
    <div class="cros-item">
        <h1 id="{{$Cat->jenis}}">{{ $Cat->jenis }}</h1>

        <img class="cross-img" src={{ $Cat->image }} alt="bg image">
        <div class="items">

                @foreach ($data as $Data)
                @if($Data->kategori == $Cat->jenis)

                    <a href='/{{$Data->nama}}' class="tap item d-flex">
                        <img class="item-img" src={{ $Data->icon }} alt="">
                        <div class="item-info">
                            <p class="item-name">{{ $Data->nama }}</p>
                            <p class="item-ver">{{ $Data->ver }}</p>
                            <p class="item-use">{{ $Data->info }}</p>
                        </div>
                    </a>
                @endif
                @endforeach

        </div>
    </div>
</div>

@endforeach

@include('components.footer')
@endsection
