@extends('layout')

@section('title', 'Todos os Usuários')

@section('content')
    <!-- Incluindo o Bootstrap no head -->
    @push('head')
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }

            .container {
                max-width: 960px;
            }

            .card {
                border: none;
                border-radius: 1rem;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .card-body {
                padding: 1.5rem;
            }

            .card-title {
                font-size: 1.75rem;
                font-weight: 600;
                color: #343a40;
            }

            .card-text {
                font-size: 1rem;
                color: #495057;
                margin-bottom: 1rem;
            }

            .text-muted {
                color: #6c757d;
                font-size: 0.875rem;
            }

            .btn-custom {
                border-radius: 0.5rem;
                font-size: 0.875rem;
                padding: 0.5rem 1rem;
                text-transform: uppercase;
                font-weight: 500;
            }

            .btn-primary {
                background: linear-gradient(45deg, #007bff, #0056b3);
                border: none;
                border-radius: 0.5rem;
                padding: 0.75rem 1.25rem;
                font-size: 1rem;
                text-transform: uppercase;
                font-weight: 500;
            }

            .btn-primary:hover {
                background: linear-gradient(45deg, #0056b3, #003d79);
            }
        </style>
    @endpush

    <div class="container my-4">
        <h1>Todos os Usuários</h1>

        @auth
            <p>Olá, {{ auth()->user()->name }}! Você está logado.</p>
            <form method="POST" action="{{ route('logout') }}" class="my-3">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @else
            <p>Você não está logado. <a href="{{ route('login') }}" class="btn btn-primary">Faça login</a></p>
        @endauth

        <a href="{{ route('users.create') }}" class="btn btn-primary my-4">Criar Novo Usuário</a>

        @if ($users->count())
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($users as $user)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h2 class="card-title">{{ $user->name }}</h2>
                                <p class="card-text">{{ $user->email }}</p>
                                <p class="text-muted">Criado em {{ $user->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Nenhum usuário cadastrado.</p>
        @endif
    </div>
@endsection
