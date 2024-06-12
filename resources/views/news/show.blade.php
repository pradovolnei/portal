@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <p>{{ $news->content }}</p>
        <p>Categorias:
            @foreach ($news->categories as $category)
                {{ $category->name }}
            @endforeach
        </p>
        <a href="{{ route('news.index') }}">Voltar</a>
    </div>
        <!-- /.card -->

@endsection
