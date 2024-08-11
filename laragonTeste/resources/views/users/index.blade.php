@extends('layout')

@section('title', 'Todos os Usuários')

@section('content')

    <div class="container my-5">
        <h1 class="mb-4 text-center">Todos os Usuários</h1>

        @auth
            <div class="alert alert-success text-center">
                Olá, {{ auth()->user()->name }}! Você está logado.
            </div>
            <form method="POST" action="{{ route('logout') }}" class="text-center">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        @else
            <div class="alert alert-warning text-center">
                Você não está logado. <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Faça login</a>
            </div>
        @endauth

        <a href="{{ route('users.create') }}" class="btn btn-primary btn-lg mb-4">
            <i class="fas fa-user-plus"></i> Criar Novo Usuário
        </a>

        @if ($users->count())
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($users as $user)
                    <div class="col">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-body">
                                <h2 class="card-title text-primary">{{ $user->name }}</h2>
                                <p class="card-text text-secondary">{{ $user->email }}</p>
                                <p class="text-muted">Criado em {{ $user->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center">
                Nenhum usuário cadastrado.
            </div>
        @endif
    </div>
@endsection
