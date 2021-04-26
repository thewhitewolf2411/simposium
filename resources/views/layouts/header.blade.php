<nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-collapse">
        <a href='/simpozij/dashboard' class="header-image">
            <img src="{{asset('/images/header/rekonio_logo.png')}}">
        </a>
    </div>

    @if(!Auth::user())

        @if(isset($parameter) && $parameter == "login")
        <div class="navbar-collapse d-flex justify-content-end">
            <button class="btn btn-outline-success my-2 my-sm-0" onclick="location.href='/auth/register'" type="submit">Registracija</button>
        </div>
        @elseif(isset($parameter) && $parameter == "register")
        <div class="navbar-collapse d-flex justify-content-end">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/auth/login'">Prijava</button>
        </div>
        @else
        <div class="navbar-collapse d-flex justify-content-end">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/auth/login'">Prijava</button>
        </div>
        @endif

    @else
       
        <div class="navbar-collapse d-flex justify-content-end">
            <p class="mx-5">{{ __('Zdravo, ') }} {{Auth::user()->name}}</p>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/logout'">Odjava</button>
        </div>
    @endif
</nav>