<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="{{asset('css/navbarPemilik.css')}}" rel="stylesheet" type="text/css" />
        <!-- <link href="{{asset('css/semua.css')}}" rel="stylesheet" type="text/css" /> -->

        <title>Menu</title>
</head>
<body>
        @if( auth()->check() )
        <nav class='nav'>
                <span class='logo'>
                <a class='c' href="{{route('dashboard')}}">Mobil<span class='red'>Malang</span></a>
                </span>
                <span class="nav-others">
                    <a style="color: #7969E8 ;" href="{{route('profView')}}">Profil</a>
                    <a style="color: #7969E8 ;" href="{{route('dashboard')}}">Riwayat</a>
                    <a style="color: #7969E8 ;" href="{{route('administrasi')}}">Admin</a>
                </span>
                <a  href = "{{route('sessDestroy')}}" class='keluar'>Keluar</a >
        </nav>
        {{-- <a href="{{route('profView')}}">Hi {{ auth()->user()->nama }}</a>
        <a href="{{route('sessDestroy')}}">Log Out</a> --}}
        @else
                <a href="{{route('sessCreate')}}">Log In</a>
                <a href="{{route('regsCreate')}}">Register</a>
        @endif
</body>
</html>

