@extends('layouts.main')

@section('title', 'Criar Contato')

@section('content')

    <div class="col-md-6 offset-md-1 mt-5" style="margin: auto">
        <h1 class="text-center mb-3">Criar Novo Contato</h1>

        <form action="{{ route('contatos.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="nome"><b>Nome:</b></label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" required placeholder="Digite o nome">
                @error('nome')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="contato"><b>Contato:</b></label>
                <input type="text" id="contato" name="contato" class="form-control" value="{{ old('contato') }}" required placeholder="Digite o contato">
                @error('contato')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email"><b>E-mail:</b></label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="Digite o E-mail">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salvar Contato</button>
            <a href="{{ route('contatos.index') }}" class="btn btn-secondary mt-3 ml-3">Cancelar</a>
        </form>
    </div>

@endsection


