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
<style>
    .iklan{
        position: fixed;
        bottom: 0;
        width: 100%;
        display: flex;
    }
    .isi-iklan{
        margin: auto;
        border-radius: 10%;
    }
</style>

<div class="iklan">
    <div class="isi-iklan">
        <script type="text/javascript">
            atOptions = {
                'key' : 'a1a8997099c31f092d76bd039627585e',
                'format' : 'iframe',
                'height' : 50,
                'width' : 320,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="//www.profitablecreativeformat.com/a1a8997099c31f092d76bd039627585e/invoke.js"></scr' + 'ipt>');
        </script>
    </div>
</div>

@endsection
