<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('css/formulir.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('image/Untitleddd.png')}}">
    <title>Formuir Penyewaan</title>
</head>
<body>
@php
        use \App\Http\Controllers\SessionController;
        echo SessionController::navbar();
    @endphp



    <form action="">
        <h2>Detail Penyewaan</h2>
        <p style="margin-bottom:15px;">Mobil : {(Toyota Avanza)}</p>
        <input class="inputM" type="date" placeholder="Tanggal Pengambilan" name="pengambilan">
        <br>
        <input class="inputM" type="date" placeholder="Tanggal Pengembalian" name="pengembalian">

        <p style="font-size: 11px; font-weight:bold; margin-bottom:30px;margin-top:5px;">*Tanggal Peminjaman dan Pengembalian <br>ditulis dengan format dd/mm/yyyy</p>

        <p style="margin-bottom:15px ;">Harga Penyewaan : Rp. {(300.000)} x {(4)} hari = Rp . {(1.200.000)} </p>
        <button class="prim-button">Kirim</button>
    </form>

</body>
</html>
