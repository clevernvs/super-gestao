@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Listagem de Produtos</h1>
    </div>

    @component('adm.components.navbar-produto')
    @endcomponent

    {{-- <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('produtos.index') }}">Novo</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('produtos.create') }}">Criar</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('fornecedor.listar') }}">Consulta</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div> --}}

    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Site (Fornecedor)</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Unidade de Medida (Id)</th>
                        <th scope="col">Comprimento</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Largura</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->fornecedor->nome }}</td>
                            <td>{{ $produto->fornecedor->site }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->unidade_medida_id }}</td>
                            <td>{{ $produto->itemDetalhe->comprimento ?? '' }}</td>
                            <td>{{ $produto->itemDetalhe->altura ?? '' }}</td>
                            <td>{{ $produto->itemDetalhe->largura ?? '' }}</td>
                            <td>
                                <a href="{{ route('produtos.show', ['produto' => $produto->id]) }}">Visualizar</a>
                                <a href="{{ route('produtos.edit', ['produto' => $produto->id]) }}">Editar</a>
                                <form id="form_{{ $produto->id }}" action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit">Excluir/button> --}}
                                    {{-- <a href="">Excluir</a> --}}
                                    <a href="#" onclick="document.getElementById('form_{{ $produto->id }}').submit()">Excluir</a>
                                </form>
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
            {{-- {{ $produtos->appends($request)->links() }} --}}
            <br>
            Exibindo {{ $produtos->count() }} de {{ $produtos->total() }} - ( de {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }} )
        </div>
    </div>

</div>
@endsection
