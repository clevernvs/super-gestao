@if (isset($cliente->id))
<form action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}" method="POST" class="container-fluid ">
    @csrf
    @method('PUT')
@else
<form action="{{ route('clientes.store') }}" method="POST" class="container-fluid ">
    @csrf
@endif

    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <input name="nome" type="text" class="form-control mb-3" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome">

    @if (isset($cliente->id))
        <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
    @else
        <button type="submit" class="btn btn-sucess btn-lg">Cadastrar</button>
    @endif
</form>
