<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
</head>
<body>
    <h1>Editar Livro</h1>

    <form action="{{ route('update', $livro->id) }}" method="POST">
        
        @method('PUT')

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $livro->titulo }}">
        
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="{{ $livro->autor }}">
        
        <label for="classificacao">Classificação:</label>
        <input type="number" name="classificacao" id="classificacao" value="{{ $livro->classificacao }}">

        <label for="resenha">Resenha:</label>
        <textarea name="resenha" id="resenha">{{ $livro->resenha }}</textarea>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
