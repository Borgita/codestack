<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
</head>
<body>
    <h1>Adicionar Livro</h1>

    <form action="{{ route('store') }}" method="POST">
        

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo">
        
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor">
        
        <label for="classificacao">Classificação:</label>
        <input type="number" name="classificacao" id="classificacao">

        <label for="resenha">Resenha:</label>
        <textarea name="resenha" id="resenha"></textarea>

        <button type="submit">Adicionar Livro</button>
    </form>
</body>
</html>
