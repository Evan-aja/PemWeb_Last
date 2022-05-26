<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/dashboardItems.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
	@include('Partials.navbarPemilik')
        @if(auth()->check())
            <h1>Selamat Datang {{ auth()->user()->nama }} </h1>
            
            <div class="pemilikdash">
                <input type="button" value="Mobil" class="tombolsubmit">
                <input type="button" value="Pesanan" class="tombolsubmit">
                <input type="button" value="Cek ID Pesanan" class="tombolsubmit">
            </div>


        @else
            <p>Hello, Stranger</p>
        @endif
</body>
</html>
