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
	@include('Partials.navbar')
        @if(auth()->check())
            <p>Hello, {{ auth()->user()->nama }}</p>
            <h1>Pilih Mobil Kesukaanmu</h1>
            <div class="item">
                @for ($i = 1; $i < 5; $i++)
                <div class='card'>
                    <img src="{{asset('image/image'.$i.'.jpg')}}"/> 
                    <div class='card-title'>
                        <p>Sisa {card.sisa}</p>
                    </div>
                    <div class='card-car-name'>
                        <p>{card.dMobil} </p>
                        <p>{card.bMobil} </p>
                    </div>
                    <div class='card-car-cc'>
                        <p>{card.cc} </p>
                    </div>
                    <div class='card-car-price'>
                        <p>{card.harga} <span class='price-hari'>/hari</span></p>
                    </div>
                    </div> 
                @endfor
            </div>
        @else
            <p>Hello, Stranger</p>
        @endif
</body>
</html>
