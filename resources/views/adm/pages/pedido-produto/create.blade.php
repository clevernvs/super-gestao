@extends('adm.template.basico')

@section('pageTitle', 'Pedido Produto')

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Adicionar Produtos ao Pedido</h1>
    </div>

    {{-- @component('adm.components.navbar-cliente')
    @endcomponent --}}

    <div class="row">
        <ul>
            <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>


    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Detalhes do pedido</h4>
                </div>
                <div class="card-body">
                    <p>ID pedido: {{ $pedido->id }}</p>
                    <p>Cliente: {{ $pedido->cliente_id }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Itens do Pedido</h4>
                </div>
                <div class="card-body">
                    @foreach($pedido->produtos as $produto)
                        <p>ID: {{ $produto->id }}</p>
                        <p>Produto: {{ $produto->nome }}</p>
                        <p>Data de inclusão no pedido: {{ $produto->pivot->created_at->format('d/m/y') }}</p>
                        <p>
                            <form id="form_{{ $pedido->pívot->id }}" action="{{ route('pedidos-produtos.destroy', ['pedidoProduto' => $produto->pivot->id, 'pedido_id' => $pedido->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-sm text-danger" role="button" aria-disabled="true" href="#" onclick="document.getElementById('form_{{ $produto->pivot->id }}').submit()">
                                    <i class="bi bi-x-circle"></i>
                                </a>
                            </form>
                        </p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @component('adm.components.formulario-pedido-produto', ['pedido' => $pedido], 'produtos' => $produtos)
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
