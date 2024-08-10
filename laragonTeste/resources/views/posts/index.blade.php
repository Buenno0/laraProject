@extends('layout')

@section('title', 'Todos os Posts')

@section('content')
    <!-- Incluindo o Bootstrap no head -->
    @push('head')
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    @endpush

    <div class="container my-4">
        <h1 class="mb-4">Todos os Posts</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Criar Novo Post</a>

        @forelse ($posts as $post)
            <article class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ $post->content }}</p>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </div>
                </div>
            </article>
        @empty
            <p>Nenhum post encontrado. <a href="{{ route('posts.create') }}" class="btn btn-primary">Criar um novo post</a></p>
        @endforelse
    </div>
@endsection

<!-- Incluindo scripts do Bootstrap no final -->
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
@endpush
