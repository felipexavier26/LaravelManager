@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Contatos</h1>
    </div>

    <div class="col-md-10 offset-md-1">
        @if (count($contatos) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Contato</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contatos as $contato)
                        <tr>
                            <td scope="col">{{ $contato->id }}</td>
                            <td scope="col">{{ $contato->nome }}</td>
                            {{-- <td scope="col"><a href="/clientes/{{ $cliente->id }}">{{ $cliente->nome }}</a></td> --}}
                            <td scope="col">{{ $contato->contato }}</td>
                            <td scope="col">{{ $contato->email }}</td>
                            <td scope="col">
                                <a href="{{ route('contatos.show', $contato->id) }}">
                                    <button type="button" class="btn btn-warning edit-btn">Visualizar</button>
                                </a>
                                
                                
                                <a href="/contatos/edit/{{ $contato->id }}">
                                    <button type="button" class="btn btn-info edit-btn">Editar</button>
                                </a>

                                <form action="/contatos/{{ $contato->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn"
                                            onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                        Deletar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem contatos. <a href="/contatos/create">Criar cliente</a></p>
        @endif
    </div>

@endsection
