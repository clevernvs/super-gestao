@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Adicionar Detalhes do Produto</h1>
    </div>

    {{-- @component('adm.components.navbar-produto')
    @endcomponent --}}

    <div class="row">
        <a href="#">Voltar</a>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    @component('adm.components.formulario-produto-detalhe', ['unidadesMedida' => $unidadesMedida])
                    @endcomponent

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
