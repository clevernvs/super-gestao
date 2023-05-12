<form action="{{ route('pedidos-produtos.store') }}" method="POST" class="container-fluid ">
    @csrf

    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <input name="nome" type="text" class="form-control mb-3" value="{{ $pedido->nome ?? old('nome') }}" placeholder="Nome">


    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    <select name="produto_id" type="select" class="form-control mb-3">
        <option value="">-- Selecione um produto --</option>
        @foreach ( $produtos as $produto )
            <option value="{{ $produto->id }}" {{ old('produto_id') == $produto->id ? 'selected' : '' }}">{{ $produto->nome }}</option>
        @endforeach
    </select>

    {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}
    <input name="quantidade" type="text" class="form-control mb-3" value="{{ old('quantidade') ? old('quantidade') : '' }}" placeholder="Quantidade">

    @if (isset($pedido->id))
    <button type="submit" class="btn btn-lg btn-success">Atualizar</button>
    @else
    <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
    @endif
</form>
