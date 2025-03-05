<header data-bs-theme="">
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                <strong>Esporte-se</strong>
            </a>
            <div class="d-flex align-items-end"> 
                @guest
                    @if(Route::has('register'))
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a class="nav-link me-5 link-light" href="{{route('register')}}">Cadastre-se</a>
                    </ul>
                    @endif
                    @if(Route::has('login'))
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a class="nav-link link-light" href="{{route('login')}}">Entrar</a>
                        </li>
                    </ul>
                    @endif
                @else
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a class="nav-link me-5 link-light" href="">{{ Auth::user()->name }}</a>
                    </ul>
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a class="nav-link me-5 link-light"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             Sair
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>

                @endguest

            </div>
        </div>
    </div>
</header>
