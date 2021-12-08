@extends('layout.base')

@section('titulo', 'Página Inicial')

@section('conteudo')
    
    <p>Livros</p>
    <table>
        <thead>
            <tr>
                <th>Livro </th>
                <th> Páginas lidas </th>
                <th> Páginas do livro </th>
                <th> Ações</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach (auth()->user()->leituras as $leitura)
                
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
                    <td>
                        <a href="/edit/{{$leitura->id}}" name="edit">Atualizar leitura</a>
                        
                        <form action="/leituras/{{ $leitura->id }}" method="POST" name="delete">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" name="delete" formmethod="POST">Excluir livro</button>
                        </form>
                    </td>
                </tr>
        
            @endforeach
        </tbody>
    </table>

@endsection