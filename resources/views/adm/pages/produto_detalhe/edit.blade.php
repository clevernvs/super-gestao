@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1>Editar Produto {{ $produto->nome }}</h1>
    </div>

    @component('adm.components.navbar-produto')
    @endcomponent

    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Produto</h4>
                </div>
                <div class="card-body">
                <h4>{{ $produtoDetalhe->item->nome }}</h4>
                <h4>{{ $produtoDetalhe->item->descricao }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    @component('adm.components.formulario-produto-detalhe', ['produtoDetalhe' => $produtoDetalhe, 'unidadesMedida' => $unidadesMedida])
                    @endcomponent

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
