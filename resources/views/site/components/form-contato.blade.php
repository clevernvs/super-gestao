<div class="row text-center mb-3">
    <h2 class="card-title">{{ $title }}</h2>
</div>
<form action="{{ route('site.contato') }}" method="POST" class="container-fluid col-md-6">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" class="form-control mb-3" placeholder="Nome">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

    <div class="row">
        <div class="col">
            <input name="email" value="{{ old('email') }}" type="text" class="form-control mb-3" placeholder="E-mail">
            {{ $errors->has('email') ? $errors->first('email') : '' }}
        </div>
        <div class="col">
            <input name="telefone" value="{{ old('telefone') }}" type="text" class="form-control mb-3" placeholder="Telefone">
            {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
        </div>
    </div>

    <select name="motivo_contato_id" class="form-select mb-3">
        <option selected>Qual o motivo do contato?</option>
        @foreach ( $motivosDoContato as $key => $motivoDoContato )
            <option value="{{ $motivoDoContato->id }}" {{ (old('motivo_contato_id') == $motivoDoContato->id ) ? 'selected' : '' }}>{{ $motivoDoContato->titulo }}</option>
        @endforeach
    </select>
    {{ $errors->has('motivo_contato_id') ? $errors->first('motivo_contato_id') : '' }}

    <textarea name="mensagem" class="form-control mb-3" placeholder="Preencha aqui a sua mensagem">{{ (old('mensagem') != null) ? old('mensagem') : 'Preencha aqui a sua mensagem...' }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}

    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>
