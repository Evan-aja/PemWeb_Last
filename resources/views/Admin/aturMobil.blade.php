<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('css/aturMobil.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('image/Untitleddd.png')}}">
    <title>Mobil</title>
</head>
<body>
@php
        use \App\Http\Controllers\SessionController;
        echo SessionController::navbar();
    @endphp
    <h1>Mobil</h1>
    <table style="border:1px solid black; ">
        <tr style="border:1px solid black; ">
            <th>ID Mobil</th>
            <th>Nama</th>
            <th>Kapasitas Mesin</th>
            <th>Harga</th>
            <th>Jumlah Unit</th>
        </tr>
        <tr >
            <td class="padding">123123</td>
            <td class="padding">Pajero</td>
            <td class="padding">12312 rpm</td>
            <td class="padding">Rp . 123123</td>
            <td class="padding">1</td>
        </tr>
        <tr >
            <td class="padding">123123</td>
            <td class="padding">Pajero</td>
            <td class="padding">12312 rpm</td>
            <td class="padding">Rp . 123123</td>
            <td class="padding">1</td>
        </tr>
        <tr >
            <td class="padding">123123</td>
            <td class="padding">Pajero</td>
            <td class="padding">12312 rpm</td>
            <td class="padding">Rp . 123123</td>
            <td class="padding">1</td>
        </tr>
    </table>

    <div class="edit">
        <div class="tambah">
            <form action="" >
            <h3>Tambah - Edit Mobil</h3>
            <input type="text" class="inputM" placeholder="ID Mobil" required>
            <br>
            <input type="text" class="inputM" placeholder="Nama" required>
            <br>
            <input type="text" class="inputM" placeholder="Kapasitas Mesin" required>
            <br>
            <input type="text" class="inputM" placeholder="Harga" required>
            <br>
            <input type="text" class="inputM" placeholder="Jumlah Unit" required>
            <br>
            <button class="sec-botton" name="upload">Upload Foto</button>
            <br>
            <button class="prim-botton" name="add">Tambah</button>
            <button class="prim-botton" name="edit">Edit</button>
            </form>
            
        </div>
        <div class="kurang">
            <form action="">
                <h3>Hapus Mobil</h3>
                <input type="text" class="inputM" placeholder="ID Mobil">
                <br>
                <button class="red-botton">Hapus</button>
            </form>
        </div>
    </div>
</body>
</html>