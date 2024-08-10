@extends('layout')

@section('title', 'Mostrar Post')

@section('content')
    <!-- Incluindo o Bootstrap CSS no head, se não estiver no layout principal -->
    @push('head')
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
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
