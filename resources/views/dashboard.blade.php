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
    @if(auth()->check())
        <p>Hello, {{ auth()->user()->nama }}</p>
    @else
        <p>Hello, Stranger</p>
    @endif
    @if(auth()->check())
        <a href="{{route('sessDestroy')}}">
            <button>Logout</button>
        </a>
    @else
        <div style="display: inline-block">
            <a href="{{route('regsCreate')}}">
                <button>Register</button>
            </a>
            <a href="{{route('sessCreate')}}">
                <button>Login</button>
            </a>
        </div>
    @endif
</body>
</html>
