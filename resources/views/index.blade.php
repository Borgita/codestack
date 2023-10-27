<!DOCTYPE html>
<html>
<head>
    <title>Minha Biblioteca Pessoal</title>
</head>
<body>
    <h1>Minha Biblioteca Pessoal</h1>

    <a href="{{ route('create') }}">Adicionar Livro</a>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Classificação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->classificacao }}</td>
                    <td>
                        <a href="{{ route('show', $livro->id) }}">Ver Detalhes</a>
                        <a href="{{ route('edit', $livro->id) }}">Editar</a>
                        <form action="{{ route('destroy', $livro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
