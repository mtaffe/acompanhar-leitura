<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <title>{{ config('app.name') }} :: @yield('titulo')</title>
</head>
<body>
    <nav id="menu">
        <ul>
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('add') }}">Adicionar livro</a></li>
            <li><a href="#">Atualizar leitura</a></li>
        </ul>
    </nav>
    
    <div>
        @yield('conteudo')
    </div>

    <footer>
        <p>Matheus Taffe - 2021</p>
    </footer>
</body>
</html>