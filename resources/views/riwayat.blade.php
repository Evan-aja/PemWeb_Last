<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('css/riwayat.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('image/Untitleddd.png')}}">
    <title>Document</title>
</head>
<body>
@php
        use \App\Http\Controllers\SessionController;
        echo SessionController::navbar();
    @endphp

    <div class="isi">
        <h2>Riwayat</h2>

        <table>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Mobil</th>
                    <th>Harga</th>
                    <th>Pengambilan</th>
                    <th>Pengembalian</th>
                    <th>Status</th>
                </tr>

                <tr class="padding selesai">
                        <td>1234</td>
                        <td>Toyota Avanza</td>
                        <td>Rp. 300.000</td>
                        <td>12/01/2022</td>
                        <td>13/01/2022</td>
                        <td>
                            <p><b>Selesai</b> </p>
                        </td>
                </tr>

                <tr class="padding pembayaranBerhasil">
                    <form action="{{route('berhasil')}}" >
                        <td>1234</td>
                        <td>Toyota Avanza</td>
                        <td>Rp. 300.000</td>
                        <td>12/01/2022</td>
                        <td>13/01/2022</td>
                        <td>
                            <button class="prim-button">Pembayaran Berhasil</button>
                        </td>
                    </form>
                </tr>
                <tr class="padding menungguPembayaran">
                    <form action="{{route('pembayaran')}}" >
                        <td>1234</td>
                        <td>Toyota Avanza</td>
                        <td>Rp. 300.000</td>
                        <td>12/01/2022</td>
                        <td>13/01/2022</td>
                        <td>
                            <button class="prim-button">Menunggu Pembayaran</button>
                        </td>
                    </form>
                </tr>

                <tr class="padding menungguKonfirmasi">
                    <form action="{{route('waiting')}}" >
                        <td>1234</td>
                        <td>Toyota Avanza</td>
                        <td>Rp. 300.000</td>
                        <td>12/01/2022</td>
                        <td>13/01/2022</td>
                        <td>
                            <button class="prim-button">Menunggu Konfirmasi</button>
                        </td>
                    </form>
                </tr>

                <tr class="padding dibatalkan">
                        <td>1234</td>
                        <td>Toyota Avanza</td>
                        <td>Rp. 300.000</td>
                        <td>12/01/2022</td>
                        <td>13/01/2022</td>
                        <td>
                            <p style="color: #bf1b1b;"><b>Dibatalkan</b> </p>
                        </td>
                </tr>
            </table>
    </div>
    
</body>
</html>