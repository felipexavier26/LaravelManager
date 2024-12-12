@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

    <div class="col-md-12" id="home">
        <h1>Bem-vindo ao sistema de gestão de contatos!</h1>

        <p>Este é o seu painel de contatos, onde você pode visualizar, editar e excluir informações de contato.</p>
        <p>Para começar, você pode escolher um contatos para ver mais detalhes ou editar suas informações diretamente.</p>

        <p>Para adicionar um novo contato à sua lista, clique <a href="{{ route('contatos.create') }}"
               >aqui</a> para criar um novo contato.</p>


    </div>

@endsection
