@extends('components.front_store')

@section('content')

@foreach ($category as $Cat)

    <div style="width: 100%; height: 75px;"></div>
    <div class="item-box">
        <div class="cros-item">
            <h1>{{ $Cat->category }}</h1>

            <img class="cross-img" src={{ $Cat->backgorund }} alt="">
            <div class="d-flex container">
                <div class="item-list row row-cols-4">

                    @foreach ($data as $Data)
                    @if($Data->category == $Cat->category)

                    <div class="col">
                        <a href={{ '/Store/'.$Data->name }} class="item d-flex">
                            <img class="item-img" src={{ $Data->icon }} alt="">
                            <div class="item-info">
                                <p class="item-name">{{ $Data->name }}</p>
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

@endsection