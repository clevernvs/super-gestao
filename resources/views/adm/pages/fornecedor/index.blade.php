@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Fornecedores</h1>
    </div>

    @component('adm.components.navbar')
    @endcomponent

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h3 class="text-center">Adicionar</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('adm.fornecedor.listar') }}" method="POST" class="container-fluid ">
                        @csrf
                        <spam class="text-danger">{{ $errors->has('nome') ? $errors->first('nome') : '' }}</spam>
                        <input name="nome" value="{{ old('nome') }}" type="text" class="form-control mb-3" placeholder="Nome">

                        <spam class="text-danger">{{ $errors->has('site') ? $errors->first('site') : '' }}</spam>
                        <input name="site" value="{{ old('site') }}" type="text" class="form-control mb-3" placeholder="Site">

                        <spam class="text-danger">{{ $errors->has('uf') ? $errors->first('uf') : '' }}</spam>
                        <input name="uf" value="{{ old('uf') }}" type="text" class="form-control mb-3" placeholder="UF">

                        <spam class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</spam>
                        <input name="email" value="{{ old('email') }}" type="text" class="form-control mb-3" placeholder="E-mail">

                        <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
