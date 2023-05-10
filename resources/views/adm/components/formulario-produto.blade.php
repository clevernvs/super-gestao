@if (isset($produto->id))
<form action="{{ route('produtos.update', ['produto' => $produto->id]) }}" method="POST" class="container-fluid ">
    @csrf
    @method('PUT')
@else
<form action="{{ route('produtos.store') }}" method="POST" class="container-fluid ">
    @csrf
@endif

    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <input name="nome" value="{{ old('nome') }}" type="text" class="form-control mb-3" placeholder="Nome">

    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <input name="descricao" value="{{ old('descricao') }}" type="text" class="form-control mb-3" placeholder="Descrição">

    {{ $errors->has('peso') ? $errors->first('peso') : '' }}
    <input name="peso" value="{{ old('peso') }}" type="text" class="form-control mb-3" placeholder="Peso">

    {{ $errors->has('unidade_medida_id') ? $errors->first('unidade_medida_id') : '' }}
    <select name="unidade_medida_id"  type="select" class="form-control mb-3" >
        <option value="">--  Selecione a unidade de medida --</option>
        @foreach ( $unidadesMedida as $unidadeMedida )
            <option value="{{ ($produto->unidade_medida_id ?? old('unidade_medida_id') == $unidadeMedida->id) ? 'selected' : '' }}">
                {{ $unidadeMedida->descricao }}
            </option>
        @endforeach
    </select>
    
    @if (isset($produto->id))
        <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
    @else
        <button type="submit" class="btn btn-sucess btn-lg">Cadastrar</button>
    @endif
</form>
