@extends('adm.template.basico')

@section('pageTitle', 'Adicionar Produto')

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Adicionar Produto</h1>
    </div>

    <div class="row">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2"  href="{{ route('produtos.index') }}"><i class="bi bi-arrow-return-left"></i> Voltar</a>
            <a class="btn btn-primary me-md-2"  href="#"><i class="bi bi-search"></i> Consulta</a>
        </div>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    @component('adm.components.formulario-produto', ['unidadesMedida' => $unidadesMedida, 'fornecedores' => $fornecedores])
                    @endcomponent

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
