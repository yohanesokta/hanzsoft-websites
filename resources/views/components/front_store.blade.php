<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link rel="shortcut icon" href="/res/img/head-logo.png" type="image/x-icon">
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $name = $data[0]->nama ?? false
    @endphp

    @if(!$name == false )
        <title>{{$name}} | {{$data[0]->info}}</title>
    @else
    <title>Hanzsoft | Store {{$req->s ?? '' }} </title>
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/css/store.css">
    @yield('customStyle')
    <link rel="stylesheet" href="/res/css/responsive.css">
</head>
<body>
    <div class="animate" id="animate">
        <div class="anim"></div>
    </div>
    <nav>
        <a href="/Store" class="tap nav-brand">
            <img src="/res/img/head-logo.png" alt="logo hanzsoft">
            <p>Hanzsoft</p>
        </a>
        <div class="kategori">
            @if ($notap ?? false)
                <a href="/Store#Desain">Desain</a>
                <a href="/Store#Online">Online</a>
                <a href="/Store#Multimedia">Multimedia</a>
            @else
                <a href="/Store#Desain" class="tap">Desain</a>
                <a href="/Store#Online" class="tap">Online</a>
                <a href="/Store#Multimedia" class="tap">Multimedia</a>
            @endif
            <a href="/about">About</a>
        </div>
        <div class="nav-right">
            <div class="search-button">
                <form action="/Store" method="get" id="search-bar">
                    <input type="text" name='s' id="s" placeholder="Cari disini" value="{{$req->s ?? ''}}">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div style="width: 100%; height: 75px;"></div>
    @yield('content')

        <script src="/res/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(window).on('load',()=>{
                $('.animate').fadeOut(1000)
            })

            $(document).ready(()=>{
                $(".tap").on('click', function(event){
                    event.stopPropagation();
                    event.stopImmediatePropagation();
                    getRecord();
                    });


                function getRecord(){
                    $(".tap").each(function () {
                        $('.animate').fadeIn(1000)
                    });
                }

                $('#search-bar').submit(()=>{
                    $('.animate').fadeIn(1000)
                })

            })

            window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                document.getElementById('animate').style.display = 'none'
                    console.log('JavaScript dijalankan kembali setelah navigasi kembali.');
                }
            });
        </script>
</body>
</html>
