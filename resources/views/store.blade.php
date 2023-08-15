@extends('components.front_store')

@section('content')

    <div style="width: 100%; height: 75px;"></div>
    <div class="item-box">
        <div class="cros-item">
            <h1>Desing Grafis</h1>

            <img class="cross-img" src="https://res.cloudinary.com/canonical/image/fetch/f_auto,q_auto,fl_sanitize,w_1920,h_640/https://dashboard.snapcraft.io/site_media/appmedia/2022/05/jami-qt-gnulinux-banner-20220504.png" alt="">
            <div class="d-flex container">
                <div class="item-list row row-cols-4">

                    <div class="col">
                        <a href="/hekki" class="item d-flex">
                            <img class="item-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy2rZXVqdTIan_ZvZgKmvWLIkqoDRL27Jpv0s2C0PRItXttx99eNgoBlpj_e41NWpp2_U&usqp=CAU" alt="">
                            <div class="item-info">
                                <p class="item-name">{{ $title }}</p>
                                <p class="item-ver">v1.1</p>
                                <p class="item-use">info Aplikasi</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

