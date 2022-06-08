<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('css/pesanan.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('image/Untitleddd.png')}}">
    <title>Pesanan</title>
</head>
<body>
    @php
        use \App\Http\Controllers\SessionController;
        echo SessionController::navbar();
    @endphp



    <div class="status">
    <h2 style="margin-top: 10vh; font-size:2vw; color:#7969E8;">Pesanan</h2>
        <div class="waitConfirm">
            <h3 style="margin-top: 8vh; color:#7969E8;">Status - Menunggu Konfirmasi</h3>
            <table style="width: 95%;">
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Peminjam</th>
                    <th style="text-align: center">Telepon</th>
                    <th style="text-align: center">Mobil</th>
                    <th style="text-align: center">Harga</th>
                    <th style="text-align: center">Pengambilan</th>
                    <th style="text-align: center">Pengembalian</th>
                    <th style="text-align: center">Action</th>
                </tr>
                @foreach($orders as $order)
                    @if(!$order->konfirmasi & !$order->batal)
                        <tr>
                            <form action="{{route('adminEditPesanan')}}" method="POST">
                                @csrf
                                <td style="width: 4%"><input name="id" style="text-align: center" value="{{$order->id}}" readonly></td>
                                <td style="">{{\App\Models\User::find($order->user_id)->nama}}</td>
                                <td style="">{{\App\Models\User::find($order->user_id)->telepon}}</td>
                                <td style="width: 10%;">{{$cars->find($order->car_id)->nama}}</td>
                                <td style="width: 10%;">Rp. {{$order->harga}}</td>
                                <td style="width: 12%;">{{$order->peminjaman}}</td>
                                <td style="width: 12%;">{{$order->pengembalian}}</td>
                                <td style="width: 20%;">
                                    <input type="submit" name="submit" class="prim-button" value="Konfirmasi">
                                    <input type="submit" name="submit" class="red-button" value="Batal">
                                </td>
                            </form>
                        </tr>
                    @endif
                @endforeach
            </table>


        </div>

        <div class="waitPayment">
            <h3 style="margin-top: 10vh; color:#7969E8;">Status - Menunggu Pembayaran</h3>
            <table style="width: 95%;">
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Peminjam</th>
                    <th style="text-align: center">Telepon</th>
                    <th style="text-align: center">Mobil</th>
                    <th style="text-align: center">Harga</th>
                    <th style="text-align: center">Pengambilan</th>
                    <th style="text-align: center">Pengembalian</th>
                    <th style="text-align: center">Action</th>
                </tr>
                @foreach($orders as $order)
                    @if($order->konfirmasi & !$order->batal)
                        @if(!$order->lunas)
                            <tr>
                                <form action="{{route('adminEditPesanan')}}" method="POST">
                                    @csrf
                                    <td style="width: 4%"><input name="id" style="text-align: center" value="{{$order->id}}" readonly></td>
                                    <td style="">{{\App\Models\User::find($order->user_id)->nama}}</td>
                                    <td style="">{{\App\Models\User::find($order->user_id)->telepon}}</td>
                                    <td style="width: 10%;">{{$cars->find($order->car_id)->nama}}</td>
                                    <td style="width: 10%;">Rp. {{$order->harga}}</td>
                                    <td style="width: 12%;">{{$order->peminjaman}}</td>
                                    <td style="width: 12%;">{{$order->pengembalian}}</td>
                                    <td style="width: 20%;">
                                        <input type="submit" name="submit" class="red-button" value="Batal">
                                    </td>
                                </form>
                            </tr>
                        @endif
                    @endif
                @endforeach
            </table>


        </div>

        <div class="paid">
            <h3 style="margin-top: 10vh; color:#7969E8;">Status - Sudah Dibayar</h3>
            <table style="width: 95%;">
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Peminjam</th>
                    <th style="text-align: center">Telepon</th>
                    <th style="text-align: center">Mobil</th>
                    <th style="text-align: center">Harga</th>
                    <th style="text-align: center">Pengambilan</th>
                    <th style="text-align: center">Pengembalian</th>
                    <th style="text-align: center">Action</th>
                </tr>
                @foreach($orders as $order)
                    @if($order->konfirmasi & !$order->batal)
                        @if($order->lunas)
                            @if(!$order->selesai)
                                <tr>
                                    <form action="{{route('adminEditPesanan')}}" method="POST">
                                        @csrf
                                        <td style="width: 4%"><input name="id" style="text-align: center" value="{{$order->id}}" readonly></td>
                                        <td style="">{{\App\Models\User::find($order->user_id)->nama}}</td>
                                        <td style="">{{\App\Models\User::find($order->user_id)->telepon}}</td>
                                        <td style="width: 10%;">{{$cars->find($order->car_id)->nama}}</td>
                                        <td style="width: 10%;">Rp. {{$order->harga}}</td>
                                        <td style="width: 12%;">{{$order->peminjaman}}</td>
                                        <td style="width: 12%;">{{$order->pengembalian}}</td>
                                        <td style="width: 20%;">
                                            <input type="submit" name="submits" class="prim-button" value="Konfirmasi">
                                            <a href="{{$order->foto_bukti}}" target="_blank" style="text-decoration: none;"><span class="sec-button">Lihat Foto</span></a>
                                            <input type="submit" name="submit" class="red-button" value="Batal">
                                        </td>
                                    </form>
                                </tr>
                            @endif
                        @endif
                    @endif
                @endforeach
            </table>
        </div>

        <div class="finish">
            <h3 style="margin-top: 10vh; color:#7969E8;">Status - Selesai</h3>
            <table style="width: 95%;">
                <tr>
                    <th style="text-align: center">ID</th>
                    <th style="text-align: center">Peminjam</th>
                    <th style="text-align: center">Telepon</th>
                    <th style="text-align: center">Mobil</th>
                    <th style="text-align: center">Harga</th>
                    <th style="text-align: center">Pengambilan</th>
                    <th style="text-align: center">Pengembalian</th>
                    <th style="text-align: center">Action</th>
                </tr>
                @foreach($orders as $order)
                    @if($order->konfirmasi & !$order->batal)
                        @if($order->lunas)
                            @if($order->selesai)
                                <tr>
                                    <form action="{{route('adminEditPesanan')}}" method="POST">
                                        @csrf
                                        <td style="width: 4%"><input name="id" style="text-align: center" value="{{$order->id}}" readonly></td>
                                        <td style="">{{\App\Models\User::find($order->user_id)->nama}}</td>
                                        <td style="">{{\App\Models\User::find($order->user_id)->telepon}}</td>
                                        <td style="width: 10%;">{{$cars->find($order->car_id)->nama}}</td>
                                        <td style="width: 10%;">Rp. {{$order->harga}}</td>
                                        <td style="width: 12%;">{{$order->peminjaman}}</td>
                                        <td style="width: 12%;">{{$order->pengembalian}}</td>
                                        <td style="width: 20%;">
                                            <a href="{{$order->foto_bukti}}" target="_blank" style="text-decoration: none;"><span class="sec-button">Lihat Foto</span></a>
                                        </td>
                                    </form>
                                </tr>
                            @endif
                        @endif
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
