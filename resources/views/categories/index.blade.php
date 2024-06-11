@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categorias</h1>
        <ul>
            @foreach ($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('categories.create') }}">Adicionar Nova Categoria</a>
    </div>
@endsection
