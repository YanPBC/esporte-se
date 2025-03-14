<nav class="navbar navbar-expand-md sticky-top bg-body-tertiary ">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav mt-3">
        <a class="nav-link" aria-current="page" href="#">Home</a>
        @auth
            <a class="nav-link" href="#">Espaços</a>
            <a class="nav-link" href="#">Inscrições</a>
        @endauth
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Bairro" aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Procurar</button>
        </form>
      </div>
    </div>
</nav>