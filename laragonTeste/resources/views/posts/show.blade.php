@extends('layout')

@section('title', 'Mostrar Post')

@section('content')
    <!-- Incluindo o Bootstrap CSS no head, se não estiver no layout principal -->
    @push('head')
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }

            .card {
                border: none;
                border-radius: 1rem;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: box-shadow 0.3s ease;
            }

            .card:hover {
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .card-title {
                font-size: 2rem;
                font-weight: 600;
                color: #343a40;
            }

            .card-text {
                font-size: 1.125rem;
                color: #495057;
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

            .container {
                max-width: 800px;
            }

            .my-4 {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        </style>
    @endpush

    <div class="container my-4">
        <!-- Card para mostrar o post -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title mb-3">{{ $post->title }}</h1>
                <p class="card-text">{{ $post->content }}</p>

                <!-- Botão para voltar -->
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Voltar para a lista de posts</a>
            </div>
        </div>
    </div>

    <!-- Incluindo o Bootstrap JS no final, se não estiver no layout principal -->
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    @endpush
@endsection
