@extends('components.front_store')

@section('content')

<div style="width: 100%; height: 75px;"></div>
    <div class="item-box">
        <div class="cros-item">
            <div class="d-flex container">
                <div class="item-list row row-cols-4" style="margin-top:-90px">
                    @foreach ($data as $Data )
                    <div class="col">
                        <a href={{ '/Store/'. urlencode($Data->nama) }} class="item d-flex">
                            <img class="item-img" src={{ $Data->icon }} alt="">
                            <div class="item-info">
                                <p class="item-name">{{ $Data->nama }}</p>
                                <p class="item-ver">{{ $Data->ver }}</p>
                                <p class="item-use">{{ $Data->info }}</p>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection
