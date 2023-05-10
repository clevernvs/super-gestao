@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Listagem de Fornecedores</h1>
    </div>

    @component('adm.components.navbar')
    @endcomponent

    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Site</th>
                        <th scope="col">UF</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedores as $fornecedor)
                        <tr>
                            <td>{{ $fornecedor->nome }}</td>
                            <td>{{ $fornecedor->site }}</td>
                            <td>{{ $fornecedor->uf }}</td>
                            <td>{{ $fornecedor->email }}</td>
                            <td>
                                <a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a>
                                <a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Lista de produtos</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nome</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($fornecedores->produtos as $chave => $produto)
                                            <td>{{ $produto->id }}</td>
                                            <td>{{ $produto->nome }}</td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
            {{ $fornecedores->appends($request)->links() }}
            <br>
            {{ $fornecedores->count() }}
            <br>
            {{ $fornecedores->total() }}
            <br>
            {{ $fornecedores->firstItem() }}
            <br>
            {{ $fornecedores->lastItem() }}
        </div>
    </div>

</div>
@endsection
