@extends('layout.base')

@section('titulo', 'Atualizar')

@section('conteudo')
<table>
    <thead>
        <tr>
            <th>Livro </th>
            <th> Páginas lidas </th>
            <th> Páginas do livro </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
            
            <tr>
                <td>
                    {{$leitura->titulo}}
                </td>

                <td>
                    {{$leitura->pag_lida}}
                </td>
                
                <td>
                    {{$leitura->pag_total}}
                </td>
            </tr>
    
    </tbody>
</table>

<form action="{{ route('edit', ['leitura' => $leitura->id ]) }}" method="post">
    {{ csrf_field() }}
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