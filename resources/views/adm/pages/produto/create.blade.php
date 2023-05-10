@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Adicionar Produto</h1>
    </div>

    @component('adm.components.navbar-produto')
    @endcomponent

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    @component('adm.components.formulario-produto')
                    @endcomponent

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
