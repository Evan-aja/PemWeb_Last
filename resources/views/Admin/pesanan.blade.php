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
            <table>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Mobil</th>
                    <th>Harga</th>
                    <th>Pengambilan</th>
                    <th>Pengembalian</th>
                    <th>Action</th>
                </tr>
                <tr class="padding">
                    <form action="" >
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                        <td class="padding">
                            <button class="prim-button">Konfirmasi</button>
                            <button class="red-button">Batal</button>
                        </td>
                    </form>
                </tr>
                <tr class="padding">
                    <form action="" >
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                        <td class="padding">
                            <button class="prim-button">Konfirmasi</button>
                            <button class="red-button">Batal</button>
                        </td>
                    </form>
                </tr>
            </table>
        
    
        </div>
       
        <div class="waitPayment">
            <h3 style="margin-top: 10vh; color:#7969E8;">Status - Menunggu Pembayaran</h3>
            <table>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Mobil</th>
                    <th>Harga</th>
                    <th>Pengambilan</th>
                    <th>Pengembalian</th>
                </tr>
                <tr class="padding">
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                </tr>
                <tr class="padding">
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                </tr>
            </table>
        
    
        </div>

        <div class="paid">
            <h3 style="margin-top: 10vh; color:#7969E8;">Status - Sudah Dibayar</h3>
            <table>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Mobil</th>
                    <th>Harga</th>
                    <th>Pengambilan</th>
                    <th>Pengembalian</th>
                    <th>Action</th>
                </tr>
                <tr class="padding">
                    <form action="" >
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                        <td class="padding">
                            <button class="prim-button">Konfirmasi</button>
                            <button class="sec-button">Lihat Foto</button>
                        </td>
                    </form>
                </tr>
                <tr class="padding">
                    <form action="" >
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                        <td class="padding">
                            <button class="prim-button">Konfirmasi</button>
                            <button class="sec-button">Lihat Foto</button>
                        </td>
                    </form>
                </tr>
            </table>
        
    
        </div>

        <div class="finish">
            <h3 style="margin-top: 10vh; color:#7969E8;">Status - Selesai</h3>
            <table style="margin-bottom: 10vh;">
                <tr>
                    <th>ID Pesanan</th>
                    <th>Mobil</th>
                    <th>Harga</th>
                    <th>Pengambilan</th>
                    <th>Pengembalian</th>
                    <th>Action</th>
                </tr>
                <tr class="padding">
                    <form action="" >
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                        <td class="padding">
                            <button class="sec-button">Lihat Foto</button>
                        </td>
                    </form>
                </tr>
                <tr class="padding">
                    <form action="" >
                        <td class="padding">1234</td>
                        <td class="padding">Toyota Avanza</td>
                        <td class="padding">Rp. 300.000</td>
                        <td class="padding">12/01/2022</td>
                        <td class="padding">13/01/2022</td>
                        <td class="padding">
                            <button class="sec-button">Lihat Foto</button>
                        </td>
                    </form>
                </tr>
            </table>
        
    
        </div>
    </div>
</body>
</html>