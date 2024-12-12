@extends('layouts.main')

@section('title', 'Detalhes do Contato')

@section('content')

    <div class="detalhes-contato mt-5">
        <h1 class="mb-2">Detalhes do Contato</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $contato->id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ $contato->nome }}</td>
            </tr>
            <tr>
                <th>Contato</th>
                <td>{{ $contato->contato }}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{ $contato->email }}</td>
            </tr>
        </table>

        <a href="/dashboard" class="btn btn-secondary">Voltar</a>

        <a href="{{ route('contatos.edit', $contato->id) }}">
            <button type="button" class="btn btn-info edit-btn">Editar</button>
        </a>

        <form action="{{ route('contatos.destroy', $contato->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn"
                onclick="return confirm('Tem certeza que deseja excluir este contato?')">
                Deletar
            </button>
        </form>
    </div>


@endsection
