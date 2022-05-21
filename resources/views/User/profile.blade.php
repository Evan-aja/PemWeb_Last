<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <div id="fixed" style="display: block;">
        @if(auth()->check())
            <p>Nama : {{ auth()->user()->nama }}</p>
            <p>NIK : {{ auth()->user()->nik }}</p>
            <p>Telepon : {{ auth()->user()->telepon }}</p>
            <p>Kota Asal : {{ auth()->user()->kota_asal }}</p>
        @else
            <meta http-equiv="refresh" content="0; URL={{ route('sessCreate') }}" />
        @endif
    </div>
    <div id="edit"  style="display: none;">
        <form method="POST" action="{{ route('profUpdate') }}" id="patch">
            {{ csrf_field() }}
            <p>Nama: <input type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->nama }}"></p>
            <p>NIK: <input type="text" class="form-control" id="nik" name="nik" value="{{ auth()->user()->nik }}"></p>
            <p>Kota Asal: <input type="text" class="form-control" id="kota_asal" name="kota_asal" value="{{ auth()->user()->kota_asal }}"></p>
            <p>Telepon: <input type="text" class="form-control" id="telepon" name="telepon" value="{{ auth()->user()->telepon }}"></p>
        </form>
    </div>
    <div style="display: inline-block;">
        <button onclick="edit()">Edit</button>
        <a href="{{route('sessDestroy')}}">
            <button>Logout</button>
        </a>
        <a href="{{route('dashboard')}}">
            <button>Beranda</button>
        </a>
        <button style="cursor:pointer; display: none;" form="patch" type="submit" id="save" onclick="save()">Save</button>
    </div>
    <script>
        function edit(){
            document.getElementById('fixed').style.display='none';
            document.getElementById('edit').style.display='block';
            document.getElementById('save').style.display='inline-block';
        }
        function save(){
            document.getElementById('save').style.display='none';
            document.getElementById('edit').style.display='none';
            document.getElementById('fixed').style.display='block';
        }
    </script>
</body>
</html>
