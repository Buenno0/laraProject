@extends('layout')

@section('title', 'Todos os Posts')

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
            }

            .btn-info {
                background: linear-gradient(45deg, #17a2b8, #117a8b);
                border: none;
            }

            .btn-warning {
                background: linear-gradient(45deg, #ffc107, #d39e00);
                border: none;
            }

            .btn-primary:hover {
                background: linear-gradient(45deg, #0056b3, #003d79);
            }

            .btn-info:hover {
                background: linear-gradient(45deg, #117a8b, #0d5a6f);
            }

            .btn-warning:hover {
                background: linear-gradient(45deg, #d39e00, #b38d00);
            }

            .mb-3 {
                margin-bottom: 1.5rem;
            }
        </style>
    @endpush

    <div class="container my-4">
        <h1 class="mb-4 text-center">Todos os Posts</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-custom btn-primary mb-3">Criar Novo Post</a>

        @forelse ($posts as $post)
            <article class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text text-muted"> {{ $post->formatted_date }} atrás</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-custom btn-info btn-sm">Ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-custom btn-warning btn-sm">Editar</a>
                    </div>
                </div>
            </article>
        @empty
            <p class="text-center">Nenhum post encontrado. <a href="{{ route('posts.create') }}" class="btn btn-custom btn-primary">Criar um novo post</a></p>
        @endforelse
    </div>
@endsection

<!-- Incluindo scripts do Bootstrap no final -->
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
@endpush
