@extends('layouts.main')

@section('title', 'Editando ' . $contato->nome)

@section('content')
    <div id="contato-edit-container" class="col-md-6 offset-md-3">
        <h1 class="text-center mt-4">Editar Contato: {{$contato->nome}}</h1>

        <form action="{{ route('contatos.update', $contato->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3 mt-4">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $contato->nome }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="contato">Contato (9 dígitos):</label>
                <input type="text" class="form-control" id="contato" name="contato" value="{{ $contato->contato }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contato->email }}" required>
            </div>

            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Salvar alterações">
            </div>
        </form>
    </div>
@endsection
