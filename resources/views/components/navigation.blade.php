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
    <link rel="stylesheet" href="/res/css/navigation.css">
    @yield('customStyle')
</head>
<body>
    {{-- nav --}}
    <nav id="navbar">
        <div class="logo" id="logo">
            <img src="/res/img/head-logo.png" alt="logo hanzsoft">
            <p>Hanzsoft</p>
        </div>
        <div class="categori">
            <ul><li><a href="/Store#Desain">Desain</a></li></ul>
            <ul><li><a href="/Store#Online">Online</a></li></ul>
            <ul><li><a href="/Store#Multimedia">Multimedia</a></li></ul>
        </div>
        <div class="search-bar">
            <form action="/Store" method="get" id="search-bar">
                <input type="text" name='s' id="s" placeholder="Cari disini" value="{{$req->s ?? ''}}">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </nav>
    <div style="width: 100%; height: 75px;"></div>
    @yield('content')
        <script src="/res/js/navigation.js"></script>
        <script src="/res/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
