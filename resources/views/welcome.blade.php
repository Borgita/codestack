<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- fontes para escolher, vou usar a roboto -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- estilos, mas deixarei não preenchido -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">
    <h1>Minha Biblioteca Pessoal</h1>

    <div>
        <a href="{{ route('index') }}" class="btn">Listar Livros</a>
        <a href="{{ route('create') }}" class="btn">Adicionar Livro</a>
    </div>

    <div>
        <a href="{{ route('edit', $livro->id) }}" class="btn">Editar Livro</a>
        <a href="{{ route('show', $livro->id) }}" class="btn">Detalhes do Livro</a>
    </div>
    </body>
</html>
