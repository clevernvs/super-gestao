@extends('adm.template.basico')

@section('pageTitle', 'Clientes')

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Listagem de Clientes</h1>
    </div>

    <div class="row">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2"  href="{{ route('clientes.create') }}"><i class="bi bi-plus-circle-fill"></i> Novo</a>
            <a class="btn btn-primary me-md-2"  href="#"><i class="bi bi-search"></i> Consulta</a>
        </div>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>
                                <a href="{{ route('clientes.show', ['cliente' => $cliente->id]) }}">Visualizar</a>
                                <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}">Editar</a>
                                <form id="form_{{ $cliente->id }}" action="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit">Excluir/button> --}}
                                    {{-- <a href="">Excluir</a> --}}
                                    <a href="#" onclick="document.getElementById('form_{{ $cliente->id }}').submit()">Excluir</a>
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
            Exibindo {{ $clientes->count() }} de {{ $clientes->total() }} - ( de {{ $clientes->firstItem() }} a {{ $clientes->lastItem() }} )
        </div>
    </div>

</div>
@endsection
