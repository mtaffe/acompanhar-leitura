@extends('layout.base')

@section('titulo', 'Página Inicial')

@section('conteudo')
    
    <form action="{{ route('salvar') }}" method="post">
        {{ csrf_field() }}
        
        <div class="field">
            <label for="titulo"> Título do livro: </label>
            <input type="text" name="titulo" id="titulo" />

            @if ($errors->has('titulo'))
                @foreach ($errors->get('titulo') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="pag_total"> Número de páginas: </label>
            <input type="text" name="pag_total" id="pag_total" />

            @if ($errors->has('pag_total'))
                @foreach ($errors->get('pag_total') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="pag_lida"> Páginas lidas: </label>
            <input type="text" name="pag_lida" id="pag_lida" />

            @if ($errors->has('pag_lida'))
                @foreach ($errors->get('pag_lida') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="btn">
            <button type="submit">Adicionar livro</button>
        </div>
    </form>

@endsection