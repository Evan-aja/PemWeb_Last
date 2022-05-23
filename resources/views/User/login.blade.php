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
    @include('Partials.navbar')
<h2>Log In</h2>

<form method="POST" action="{{route('sessStore')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="telepon">Telepon:</label>
        <input type="text" class="form-control" id="telepon" name="telepon">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
</body>
</html>
