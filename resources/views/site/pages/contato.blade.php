@extends('site.template.basico')

@section('pageTitle', $pageTitle)

@section('conteudo')
<div class="container">
    <div class="row text-center mt-3 mb-3">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="row  mb-3">
        <div class="card text-bg-light mb-3">
            <div class="card-body">
                @component('site.components.form-contato', [
                    'title' => 'Formulário de Contato',
                    'motivosDoContato' => $motivosDoContato
                ])
                @endcomponent
            </div>
        </div>
    </div>
</div>
@endsection
