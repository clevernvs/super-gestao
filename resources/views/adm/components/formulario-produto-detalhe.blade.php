@if (isset($produtoDetalhe->id))
<form action="{{ route('produtos-detalhes.update', ['produtoDetalhe' => $produtoDetalhe->id]) }}" method="POST" class="container-fluid ">
    @csrf
    @method('PUT')
@else
<form action="{{ route('produtos-detalhes.store') }}" method="POST" class="container-fluid ">
    @csrf
@endif

    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    <input name="produto_id" value="{{ old('produto_id') }}" type="text" class="form-control mb-3" placeholder="Id do Produto">

    {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}
    <input name="comprimento" value="{{ old('comprimento') }}" type="text" class="form-control mb-3" placeholder="Comprimento">

    {{ $errors->has('largura') ? $errors->first('largura') : '' }}
    <input name="largura" value="{{ old('largura') }}" type="text" class="form-control mb-3" placeholder="Largura">

    {{ $errors->has('altura') ? $errors->first('altura') : '' }}
    <input name="altura" value="{{ old('altura') }}" type="text" class="form-control mb-3" placeholder="Altura">

    {{ $errors->has('unidade_medida_id') ? $errors->first('unidade_medida_id') : '' }}
    <select name="unidade_medida_id"  type="select" class="form-control mb-3" >
        <option value="">--  Selecione a unidade de medida --</option>
        @foreach ( $unidadesMedida as $unidadeMedida )
            <option value="{{ ($produtoDetalhe->unidade_medida_id ?? old('unidade_medida_id') == $unidadeMedida->id) ? 'selected' : '' }}">
                {{ $unidadeMedida->descricao }}
            </option>
        @endforeach
    </select>

    @if (isset($produtoDetalhe->id))
        <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
    @else
        <button type="submit" class="btn btn-sucess btn-lg">Cadastrar</button>
    @endif
</form>
