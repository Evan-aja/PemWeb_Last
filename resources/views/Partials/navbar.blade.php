<nav style="width:100%">
    <a class="navbar-brand" href="{{route('dashboard')}}">PinjamMobil</a>
    <div style="display:inline-block;">
            @if( auth()->check() )
                    <a href="{{route('profView')}}">Hi {{ auth()->user()->nama }}</a>
                    <a href="{{route('sessDestroy')}}">Log Out</a>
            @else
                    <a href="{{route('sessCreate')}}">Log In</a>
                    <a href="{{route('regsCreate')}}">Register</a>
            @endif
        </ul>
    </div>
</nav>
