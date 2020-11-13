<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/simpozij/dashboard'">Navbar</button>
    </div>

    @if(!Auth::user())

        @if(isset($parameter) && $parameter == "login")
        <div class="collapse navbar-collapse">
            <button class="btn btn-outline-success my-2 my-sm-0" onclick="location.href='/auth/register'" type="submit">Register</button>
        </div>
        @elseif(isset($parameter) && $parameter == "register")
        <div class="collapse navbar-collapse">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/auth/login'">Login</button>
        </div>
        @else
        <div class="collapse navbar-collapse">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/auth/login'">Login</button>
        </div>
        @endif

    @else

        {{ __('Zdravo, ') }} {{Auth::user()->name}}
        <div class="collapse navbar-collapse">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/logout'">Logout</button>
        </div>
    @endif
</nav>