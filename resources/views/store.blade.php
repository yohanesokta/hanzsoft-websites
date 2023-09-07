@extends('components.front_store')

@section('content')

@foreach ($category as $Cat)

    <div class="item-box">
        <div class="cros-item">
            <h1 id="{{$Cat->jenis}}">{{ $Cat->jenis }}</h1>

            <img class="cross-img" src={{ $Cat->image }} alt="bg image">
            <div class="d-flex container">
                <div class="item-list row row-cols-4">

                    @foreach ($data as $Data)
                    @if($Data->kategori == $Cat->jenis)

                    <div class="col">
                        <a href='/Store/{{$Data->nama}}' class="tap item d-flex">
                            <img class="item-img" src={{ $Data->icon }} alt="">
                            <div class="item-info">
                                <p class="item-name">{{ $Data->nama }}</p>
                                <p class="item-ver">{{ $Data->ver }}</p>
                                <p class="item-use">{{ $Data->info }}</p>
                            </div>
                        </a>
                    </div>
                    @endif

                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endforeach

@include('components.footer')

@endsection
