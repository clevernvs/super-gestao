@extends('site.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Sistema Super Gestão</h1>
                    <p>
                        O Software para gestão empresarial ideal para sua empresa.
                    <ul>
                        <li><i class="bi bi-check-square-fill text-success"></i> Gestão completa e descomplicada</li>
                        <li><i class="bi bi-check-square-fill text-success"></i> Sua empresa na nuvem</li>
                    </ul>
                    </p>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('img/player_video.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @component('site.components.form-contato', [
                        'title' => 'Formulário da Home',
                        'motivosDoContato' => $motivosDoContato
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
