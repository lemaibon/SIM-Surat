<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM SURAT</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link rel="stylesheet" href="css/landing.css">
</head>
<body>
    <div class="topnav-right">
        <a href="" style="display: none;"></a>
        @if (Route::has('login'))
            @auth
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        @endif
    </div>

    <div class="jumbotron">
        <a href="#">SIM Surat</a> 
    </div>

    <nav>
        <a href="{{ route('surat.index') }}">Daftar Surat Masuk/Keluar</a>
        <a href="{{ route('surat.create') }}">Buat Surat Masuk/Keluar</a>
        <a href="{{ route('disposisi.index') }}">Daftar Disposisi</a>
        <a href="{{ route('disposisi.create') }}">Buat Disposisi</a>
        <a href="{{ url('/surat/laporan') }}">Laporan Surat Masuk/Keluar</a>
        <div class="line"></div>
    </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
