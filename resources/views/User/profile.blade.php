<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->
    <link href="{{asset('css/semua.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/profil.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    @include('Partials.navbar')
    <div class="masuk_text">
    <h1 style="margin-top: 10vh;">Profil</h1>
    <div id="fixed" style="display: block;">
        @if(auth()->check())
        <table style="border-spacing: 10px;">
            <tr>
                <td class="label">Nama</td>
                <td class="inputProfile">{{ auth()->user()->nama }}</td>
            </tr>
            <tr>
                <td class="label">NIK</td>
                <td class="inputProfile">{{ auth()->user()->nik }}</td>
            </tr>
            <tr>
                <td class="label">Telepon</td>
                <td class="inputProfile">{{ auth()->user()->telepon }}</td>
            </tr>
            <tr>
                <td class="label">Kota Asal</td>
                <td class="inputProfile">{{ auth()->user()->kota_asal }}</td>
            </tr>
        </table>
        @else
            <meta http-equiv="refresh" content="0; URL={{ route('sessCreate') }}" />
        @endif
    </div>
    <div id="edit"  style="display: none;">
        <form method="POST" action="{{ route('profUpdate') }}" id="patch">
            {{ csrf_field() }}

            <table  style="border-spacing: 10px;" >
                <tr>
                    <td class="label">Nama</td>
                    <td class="inputProfile"><input type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->nama }}"></td>
                </tr>
                <tr>
                    <td class="label">NIK</td>
                    <td class="inputProfile"><input type="text" class="form-control" id="nik" name="nik" value="{{ auth()->user()->nik }}"></td>
                </tr>
                <tr>
                    <td class="label">Telepon</td>
                    <td class="inputProfile "><input type="text" class="form-control" id="telepon" name="telepon" value="{{ auth()->user()->telepon }}"></td>
                </tr>
                <tr>
                    <td class="label">Kota Asal</td>
                    <td class="inputProfile"><input type="text" class="form-control" id="kota_asal" name="kota_asal" value="{{ auth()->user()->kota_asal }}"></td>
                </tr>
            </table>
            
        </form>
    </div>
    <div style="display: inline-block;">
        <button id="hide" onclick="edit()" class="tombolsubmit profil">Edit</button>
        <button style="cursor:pointer; display: none;" form="patch" type="submit" id="save" onclick="save()" class="tombolsubmit profil">Save</button>
    </div>
    </div>
    
    <script>
        function edit(){
	    document.getElementById('hide').style.display='none';
            document.getElementById('fixed').style.display='none';
            document.getElementById('edit').style.display='block';
            document.getElementById('save').style.display='inline-block';
        }
        function save(){
	    document.getElementById('hide').style.display='inline-block';
            document.getElementById('save').style.display='none';
            document.getElementById('edit').style.display='none';
            document.getElementById('fixed').style.display='block';
        }
    </script>
</body>
</html>
