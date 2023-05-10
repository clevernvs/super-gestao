<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('site.index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Super Gestão" width="30" height="30" class="d-inline-block align-text-top">
            Super Gestão
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('adm.index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('adm.cliente') }}">Clientes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('adm.fornecedor') }}">Fornecedores</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('adm.sair') }}">Sair</a></li>
        </ul>
    </div>
</nav>
