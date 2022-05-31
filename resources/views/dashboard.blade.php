<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Utama</title>
    <link href="{{asset('css/dashboardItems.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('image/Untitleddd.png')}}">

</head>
<body>
	@php
        use \App\Http\Controllers\SessionController;
        echo SessionController::navbar();
    @endphp
        @if(auth()->check())
            <p>Hello, {{ auth()->user()->nama }}</p>
            <h1>Pilih Mobil Kesukaanmu</h1>
            <div class="item">
                @for ($i = 0; $i < 5; $i++)
                <div class='card'>
                    <img src="{{$mobil[$i]['foto']}}"/>
                    <div class='card-title'>
                        <p>Sisa {{$mobil[$i]['jumlah']}}</p>
                    </div>
                    <div class='card-car-name'>
                        <p>{{$mobil[$i]['nama']}} </p>
                    </div>
                    <div class='card-car-cc'>
                        <p>{{$mobil[$i]['mesin']}} </p>
                    </div>
                    <div class='card-car-price'>
                        <p>{{$mobil[$i]['harga']}} <span class='price-hari'>/hari</span></p>
                    </div>
                    </div>
                @endfor
            </div>
        @else
            <p>Hello, Stranger</p>
        @endif
</body>
</html>
