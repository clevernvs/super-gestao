@extends('site.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <h1 class="text-center">Sistema Super Gestão</h1>

                    {{ (isset($error) && $error != '') ? $error : '' }}

                    <form class="container-fluid col-md-6" action="{{ route('site.login') }}" method="POST" >
                        @csrf
                        <input name="usuario" value="{{ old('usuario') }}" type="email" class="form-control mb-3" placeholder="Usuário">
                        {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}

                        <input name="senha" value="{{ old('senha') }}" type="password" class="form-control mb-3" placeholder="Senha">
                        {{ $errors->has('senha') ? $errors->first('senha') : '' }}

                        <button type="submit" class="btn btn-primary btn-lg">Acessar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
