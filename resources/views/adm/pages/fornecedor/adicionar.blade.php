@extends('adm.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">

    <div class="row justify-content-md-center">
        <h1 class="text-center">Adicionar</h1>
    </div>

    @component('adm.components.navbar')
    @endcomponent

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="alert alert-primary" role="alert">
                        {{ $mensagem ?? '' }}
                    </div>

                    <form action="{{ route('app.fornecedor.adicionar') }}" method="POST" class="container-fluid ">
                        @csrf
                        <input name="id" value="{{ $fornecedor->id) ?? '' }}" type="hidden">

                        <spam class="text-danger">{{ $errors->has('nome') ? $errors->first('nome') : '' }}</spam>
                        <input name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" type="text" class="form-control mb-3" placeholder="Nome">

                        <spam class="text-danger">{{ $errors->has('site') ? $errors->first('site') : '' }}</spam>
                        <input name="site" value="{{  $fornecedor->site ?? old('site') }}" type="text" class="form-control mb-3" placeholder="site">

                        <spam class="text-danger">{{ $errors->has('uf') ? $errors->first('uf') : '' }}</spam>
                        <input name="uf" value="{{  $fornecedor->uf ?? old('uf') }}" type="text" class="form-control mb-3" placeholder="uf">

                        <spam class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</spam>
                        <input name="email" value="{{  $fornecedor->email ?? old('email') }}" type="text" class="form-control mb-3" placeholder="email">

                        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
