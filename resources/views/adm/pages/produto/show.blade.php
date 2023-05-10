@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Visualizar - Produto</h1>
    </div>

    @component('adm.components.navbar-produto')
    @endcomponent

    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>{{ $produto->id }}</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td>{{ $produto->nome }}</td>
                </tr>
                <tr>
                    <td>Descrição</td>
                    <td>{{ $produto->descricao }}</td>
                </tr>
                <tr>
                    <td>Peso</td>
                    <td>{{ $produto->peso }}</td>
                </tr>
                <tr>
                    <td>Unidade de Medida</td>
                    <td>{{ $produto->unidade_medida_id }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>
@endsection
