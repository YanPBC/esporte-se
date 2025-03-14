<nav class="navbar navbar-expand-md sticky-top bg-body-tertiary ">
    <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav mt-3">
        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        @auth
            <a class="nav-link" href="{{route('espacos')}}">Espaços</a>
            <a class="nav-link" href="{{route('inscricoes')}}">Inscrições</a>
        @endauth
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Bairro" aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Procurar</button>
        </form>
      </div>
    </div>
</nav>