@extends('layout.base')

@section('titulo', 'Sucesso')

@section('conteudo')

    <div class="sucesso">
        <p>Livro {{ $livro }} adicionado com sucesso</p>
        <a href="{{ route('dashboard') }}"></a>
    </div>

@endsection