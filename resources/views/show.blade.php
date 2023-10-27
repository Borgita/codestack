<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Livro</title>
</head>
<body>
    <h1>Detalhes do Livro</h1>

    <p><strong>Título:</strong> {{ $livro->titulo }}</p>
    <p><strong>Autor:</strong> {{ $livro->autor }}</p>
    <p><strong>Classificação:</strong> {{ $livro->classificacao }}</p>
    <p><strong>Resenha:</strong> {{ $livro->resenha }}</p>

    <a href="{{ route('list') }}">Voltar para a Lista de Livros</a>
</body>
</html>
