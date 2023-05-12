@extends('adm.template.basico')

@section('pageTitle', 'Pedidos')

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Listagem de Pedidos</h1>
    </div>

    <div class="row">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2"  href="{{ route('pedidos.create') }}"><i class="bi bi-plus-circle-fill"></i> Novo</a>
            <a class="btn btn-primary me-md-2"  href="#"><i class="bi bi-search"></i> Consulta</a>
        </div>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID ( Pedido )</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">---</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->cliente_id }}</td>
                            <td><a href="{{ route('pedidos-produtos.create', ['pedido' => $pedido->id]) }}">adicionar produtos</a></td>
                            <td>
                                <a href="{{ route('pedidos.show', ['pedido' => $pedido->id]) }}">Visualizar</a>
                                <a href="{{ route('pedidos.edit', ['pedido' => $pedido->id]) }}">Editar</a>
                                <form id="form_{{ $pedido->id }}" action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit">Excluir/button> --}}
                                    {{-- <a href="">Excluir</a> --}}
                                    <a href="#" onclick="document.getElementById('form_{{ $pedido->id }}').submit()">Excluir</a>
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
            {{-- Exibindo {{ $pedido->count() }} de {{ $pedido->total() }} - ( de {{ $pedido->firstItem() }} a {{ $pedido->lastItem() }} ) --}}
        </div>
    </div>

</div>
@endsection
