@if (isset($pedido->id))
<form action="{{ route('pedidos.update', ['pedido' => $pedido->id]) }}" method="POST" class="container-fluid ">
    @csrf
    @method('PUT')
@else
<form action="{{ route('pedidos.store') }}" method="POST" class="container-fluid ">
    @csrf
@endif

    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <input name="nome" type="text" class="form-control mb-3" value="{{ $pedido->nome ?? old('nome') }}" placeholder="Nome">


    {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}
    <select name="cliente_id" type="select" class="form-control mb-3" >
        <option value="">--  Selecione um Cliente --</option>
        @foreach ( $clientes as $cliente )
            <option value="{{ $cliente->id }}" {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}">
                {{ $cliente->nome }}
            </option>
        @endforeach
    </select>

    @if (isset($pedido->id))
        <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
    @else
        <button type="submit" class="btn btn-sucess btn-lg">Cadastrar</button>
    @endif
</form>
