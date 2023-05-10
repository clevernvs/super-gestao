<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('site.index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Super Gestão" width="30" height="30" class="d-inline-block align-text-top">
            Super Gestão
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('site.index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('site.sobrenos') }}">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </div>
</nav>