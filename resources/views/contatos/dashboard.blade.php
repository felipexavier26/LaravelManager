@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1">
        <h1 class="mt-5 text-center">Meus Contatos</h1>
    </div>

    <div class="col-md-10 offset-md-1 mb-5">
        <form action="{{ route('contatos.dashboard') }}" method="get">
            <input type="search" class="form-control" name="search" id="search" placeholder="Digite contato" value="{{ request('search') }}">
        </form>
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
                            <td scope="col">{{ $contato->contato }}</td>
                            <td scope="col">{{ $contato->email }}</td>
                            <td scope="col">
                                <a href="{{ route('contatos.show', $contato->id) }}">
                                    <button type="button" class="btn btn-warning edit-btn">Visualizar</button>
                                </a>
                                
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem contatos. <a href="{{ route('contatos.create') }}">Criar contato</a></p>
        @endif
    </div>

    <div class="pagination-container mt-4">
        <div class="d-flex justify-content-center">
            @if ($contatos->onFirstPage())
                <span class="btn btn-secondary ">Anterior</span>
            @else
                <a href="{{ $contatos->previousPageUrl() }}" class="btn btn-secondary">Anterior</a>
            @endif

            @if ($contatos->hasMorePages())
                <a href="{{ $contatos->nextPageUrl() }}" class="btn btn-secondary ml-2">Próximo</a>
            @else
                <span class="btn btn-secondary  ml-2">Próximo</span>
            @endif
        </div>

        <p class="mt-2 text-center">Mostrando {{ $contatos->firstItem() }} para {{ $contatos->lastItem() }} de {{ $contatos->total() }} resultados</p>
    </div>

@endsection

