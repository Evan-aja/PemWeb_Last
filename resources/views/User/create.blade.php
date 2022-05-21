<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Register</h2>
<form method="POST" action="{{ route('regsStore') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>

    <div class="form-group">
        <label for="nik">NIK:</label>
        <input type="text" class="form-control" id="nik" name="nik">
    </div>

    <div class="form-group">
        <label for="kota_asal">Kota Asal:</label>
        <input type="text" class="form-control" id="kota_asal" name="kota_asal">
    </div>

    <div class="form-group">
        <label for="telepon">Telepon:</label>
        <input type="text" class="form-control" id="telepon" name="telepon">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

</body>
</html>
